<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('backend.pages.sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('backend.pages.sliders.create');
    }

    public function store(Request $request)
    {
        
            // Validasi data input termasuk file gambar
            $request->validate([
                'title' => 'required|string|max:255',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi jenis dan ukuran file gambar
            ]);
        
            // Inisialisasi model Slider
            $slider = new Slider();
            $slider->title = $request->title;
            $slider->subtitle = $request->subtitle;
            $slider->button_text = $request->button_text;
            $slider->button_link = $request->button_link;
            $slider->description = $request->description;
        
            // Cek apakah ada file yang diupload
            if ($request->hasFile('image')) {
                // Ambil file gambar dari request
                $image = $request->file('image');
        
                // Buat nama unik untuk file dengan menambahkan timestamp
                $imageName = time() . '.' . $image->getClientOriginalExtension();
        
                // Simpan file gambar ke direktori sliders dalam storage (public)
                $imagePath = $image->storeAs('sliders', $imageName, 'public');
        
                // Simpan path file gambar ke database
                $slider->image = $imagePath;
            }
        
            // Simpan data slider ke database
            $slider->save();
        
            // Redirect ke halaman index slider dengan pesan sukses
            return redirect()->route('admin.slider.index')->with('success', 'Slider created successfully.');
        }
        
        
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('backend.pages.sliders.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image',
        ]);

        $slider = Slider::findOrFail($id);
        $slider->title = $request->title;
        $slider->subtitle = $request->subtitle;
        $slider->button_text = $request->button_text;
        $slider->button_link = $request->button_link;
        $slider->description = $request->description;

        if ($request->hasFile('image')) {
            // Delete old image
            if ($slider->image) {
                Storage::disk('public')->delete($slider->image);
            }
            $slider->image = $request->file('image')->store('sliders', 'public');
        }

        $slider->save();

        return redirect()->route('admin.slider.index')->with('success', 'Slider updated successfully.');
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        
        // Delete image
        if ($slider->image) {
            Storage::disk('public')->delete($slider->image);
        }

        $slider->delete();

        return redirect()->route('admin.slider.index')->with('success', 'Slider deleted successfully.');
    }
}

