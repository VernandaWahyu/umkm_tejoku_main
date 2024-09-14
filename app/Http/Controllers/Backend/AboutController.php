<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('backend.pages.abouts.index', compact('abouts'));
    }

    public function create()
    {
        return view('backend.pages.abouts.create');
    }

    public function store(Request $request)
    {
        // Validasi data input termasuk file gambar
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi jenis dan ukuran file gambar
            'description' => 'required|string',
        ]);

        // Inisialisasi model About
        $about = new About();
        $about->title = $request->title;
        $about->description = $request->description;

        // Cek apakah ada file yang diupload
        if ($request->hasFile('image')) {
            // Ambil file gambar dari request
            $image = $request->file('image');

            // Buat nama unik untuk file dengan menambahkan timestamp
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Simpan file gambar ke direktori abouts dalam storage (public)
            $imagePath = $image->storeAs('abouts', $imageName, 'public');

            // Simpan path file gambar ke database
            $about->image = $imagePath;
        }

        // Simpan data about ke database
        $about->save();

        // Redirect ke halaman index about dengan pesan sukses
        return redirect()->route('admin.about.index')->with('success', 'About created successfully.');
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('backend.pages.abouts.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image',
            'description' => 'required|string',
        ]);

        $about = About::findOrFail($id);
        $about->title = $request->title;
        $about->description = $request->description;

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($about->image) {
                Storage::disk('public')->delete($about->image);
            }
            $about->image = $request->file('image')->store('abouts', 'public');
        }

        $about->save();

        return redirect()->route('admin.about.index')->with('success', 'About updated successfully.');
    }

    public function destroy($id)
    {
        $about = About::findOrFail($id);
        
        // Hapus gambar
        if ($about->image) {
            Storage::disk('public')->delete($about->image);
        }

        $about->delete();

        return redirect()->route('admin.about.index')->with('success', 'About deleted successfully.');
    }
}
