<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SponsorController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel sponsor
        $sponsors = Sponsor::all();
        return view('backend.pages.sponsors.index', compact('sponsors'));
    }

    public function create()
    {
        // Menampilkan form untuk menambahkan sponsor baru
        return view('backend.pages.sponsors.create');
    }

    public function store(Request $request)
    {
        // Validasi data input hanya untuk file gambar
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi jenis dan ukuran file gambar
        ]);

        // Inisialisasi model Sponsor
        $sponsor = new Sponsor();

        // Cek apakah ada file yang diupload
        if ($request->hasFile('image')) {
            // Ambil file gambar dari request
            $image = $request->file('image');

            // Buat nama unik untuk file dengan menambahkan timestamp
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Simpan file gambar ke direktori sponsors dalam storage (public)
            $imagePath = $image->storeAs('sponsors', $imageName, 'public');

            // Simpan path file gambar ke database
            $sponsor->image = $imagePath;
        }

        // Simpan data sponsor ke database
        $sponsor->save();

        // Redirect ke halaman index sponsor dengan pesan sukses
        return redirect()->route('admin.sponsor.index')->with('success', 'Sponsor created successfully.');
    }

    public function edit($id)
    {
        // Ambil data sponsor berdasarkan id
        $sponsor = Sponsor::findOrFail($id);
        return view('backend.pages.sponsors.edit', compact('sponsor'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data input hanya untuk file gambar
        $request->validate([
            'image' => 'nullable|image', // Gambar bersifat opsional saat update
        ]);

        // Ambil data sponsor berdasarkan id
        $sponsor = Sponsor::findOrFail($id);

        // Cek apakah ada file yang diupload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($sponsor->image) {
                Storage::disk('public')->delete($sponsor->image);
            }

            // Simpan file gambar yang baru
            $sponsor->image = $request->file('image')->store('sponsors', 'public');
        }

        // Simpan perubahan data sponsor
        $sponsor->save();

        // Redirect ke halaman index sponsor dengan pesan sukses
        return redirect()->route('admin.sponsor.index')->with('success', 'Sponsor updated successfully.');
    }

    public function destroy($id)
    {
        // Ambil data sponsor berdasarkan id
        $sponsor = Sponsor::findOrFail($id);

        // Hapus gambar jika ada
        if ($sponsor->image) {
            Storage::disk('public')->delete($sponsor->image);
        }

        // Hapus data sponsor dari database
        $sponsor->delete();

        // Redirect ke halaman index sponsor dengan pesan sukses
        return redirect()->route('admin.sponsor.index')->with('success', 'Sponsor deleted successfully.');
    }
}
