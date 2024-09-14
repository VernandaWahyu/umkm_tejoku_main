<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SocialController extends Controller
{
    public function index()
    {
        $socials = Social::all(); // Ambil semua data dari tabel social
        return view('backend.pages.socials.index', compact('socials'));
    }

    public function create()
    {
        return view('backend.pages.socials.create');
    }

    public function store(Request $request)
    {
        // Validasi data input termasuk file gambar
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi jenis dan ukuran file gambar
            'keyword' => 'required|string|max:255',
            'facebook' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'youtube' => 'nullable|url|max:255',
        ]);

        // Inisialisasi model Social
        $social = new Social();
        $social->title = $request->title;
        $social->keyword = $request->keyword;
        $social->facebook = $request->facebook;
        $social->instagram = $request->instagram;
        $social->youtube = $request->youtube;

        // Cek apakah ada file yang diupload
        if ($request->hasFile('image')) {
            // Ambil file gambar dari request
            $image = $request->file('image');

            // Buat nama unik untuk file dengan menambahkan timestamp
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Simpan file gambar ke direktori socials dalam storage (public)
            $imagePath = $image->storeAs('socials', $imageName, 'public');

            // Simpan path file gambar ke database
            $social->image = $imagePath;
        }

        // Simpan data social ke database
        $social->save();

        // Redirect ke halaman index social dengan pesan sukses
        return redirect()->route('admin.social.index')->with('success', 'Social created successfully.');
    }

    public function edit($id)
    {
        $social = Social::findOrFail($id); // Ambil data social berdasarkan id
        return view('backend.pages.socials.edit', compact('social'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image', // Gambar bersifat opsional saat update
            'keyword' => 'required|string|max:255',
            'facebook' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'youtube' => 'nullable|url|max:255',
        ]);

        $social = Social::findOrFail($id);
        $social->title = $request->title;
        $social->keyword = $request->keyword;
        $social->facebook = $request->facebook;
        $social->instagram = $request->instagram;
        $social->youtube = $request->youtube;

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($social->image) {
                Storage::disk('public')->delete($social->image);
            }
            $social->image = $request->file('image')->store('socials', 'public');
        }

        $social->save();

        return redirect()->route('admin.social.index')->with('success', 'Social updated successfully.');
    }

    public function destroy($id)
    {
        $social = Social::findOrFail($id);
        
        // Hapus gambar
        if ($social->image) {
            Storage::disk('public')->delete($social->image);
        }

        $social->delete();

        return redirect()->route('admin.social.index')->with('success', 'Social deleted successfully.');
    }
}

