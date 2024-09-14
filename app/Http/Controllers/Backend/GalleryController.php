<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all(); // Ambil semua data dari tabel gallery
        return view('backend.pages.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('backend.pages.galleries.create');
    }

    public function store(Request $request)
    {
        // Validasi data input termasuk file gambar
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi jenis dan ukuran file gambar
            'keyword' => 'required|string|max:255',
        ]);

        // Inisialisasi model Gallery
        $gallery = new Gallery();
        $gallery->title = $request->title;
        $gallery->keyword = $request->keyword;

        // Cek apakah ada file yang diupload
        if ($request->hasFile('image')) {
            // Ambil file gambar dari request
            $image = $request->file('image');

            // Buat nama unik untuk file dengan menambahkan timestamp
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Simpan file gambar ke direktori gallery dalam storage (public)
            $imagePath = $image->storeAs('galleries', $imageName, 'public');

            // Simpan path file gambar ke database
            $gallery->image = $imagePath;
        }

        // Simpan data gallery ke database
        $gallery->save();

        // Redirect ke halaman index gallery dengan pesan sukses
        return redirect()->route('admin.gallery.index')->with('success', 'Gallery created successfully.');
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id); // Ambil data gallery berdasarkan id
        return view('backend.pages.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image', // Gambar bersifat opsional saat update
            'keyword' => 'required|string|max:255',
        ]);

        $gallery = Gallery::findOrFail($id);
        $gallery->title = $request->title;
        $gallery->keyword = $request->keyword;

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($gallery->image) {
                Storage::disk('public')->delete($gallery->image);
            }
            $gallery->image = $request->file('image')->store('galleries', 'public');
        }

        $gallery->save();

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery updated successfully.');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        
        // Hapus gambar
        if ($gallery->image) {
            Storage::disk('public')->delete($gallery->image);
        }

        $gallery->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery deleted successfully.');
    }
}
