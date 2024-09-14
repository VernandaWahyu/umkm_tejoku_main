<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{
    // Menampilkan daftar semua Map URL
    public function index()
    {
        $maps = Map::all();
        return view('backend.pages.maps.index', compact('maps'));
    }

    // Menampilkan form untuk membuat Map URL baru
    public function create()
    {
        return view('backend.pages.maps.create');
    }

    // Menyimpan Map URL baru ke database
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'url_map' => 'required|url|max:999',
        ]);

        // Inisialisasi model Map dan simpan data
        $map = new Map();
        $map->url_map = $request->url_map;
        $map->save();

        // Redirect ke halaman index map dengan pesan sukses
        return redirect()->route('admin.map.index')->with('success', 'Map URL created successfully.');
    }

    // Menampilkan form untuk mengedit Map URL tertentu
    public function edit($id)
    {
        $map = Map::findOrFail($id);
        return view('backend.pages.maps.edit', compact('map'));
    }

    // Memperbarui Map URL di database
    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'url_map' => 'required|url|max:999',
        ]);

        // Cari dan update Map URL
        $map = Map::findOrFail($id);
        $map->url_map = $request->url_map;
        $map->save();

        // Redirect ke halaman index map dengan pesan sukses
        return redirect()->route('admin.map.index')->with('success', 'Map URL updated successfully.');
    }

    // Menghapus Map URL dari database
    public function destroy($id)
    {
        $map = Map::findOrFail($id);
        $map->delete();

        return redirect()->route('admin.map.index')->with('success', 'Map URL deleted successfully.');
    }
}
