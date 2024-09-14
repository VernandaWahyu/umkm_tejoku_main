<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all(); // Ambil semua data dari tabel article
        return view('backend.pages.articles.index', compact('articles'));
    }
    public function show($slug)
    {
        // Fetch article by slug
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('backend.pages.articles.show', compact('article'));
    }

    public function create()
    {
        return view('backend.pages.articles.create');
    }

    public function store(Request $request)
    {
        // Validasi data input termasuk file gambar
        $request->validate([
            'title' => 'required|string|max:255',
            'keyword' => 'required|string|max:255',
            'content' => 'required',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar1
            'subtitle' => 'required|string|max:255',
            'subcontent' => 'required',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar2 opsional
            'slug' => 'required|string|max:255|unique:articles,slug',
        ]);

        // Inisialisasi model Article
        $article = new Article();
        $article->title = $request->title;
        $article->keyword = $request->keyword;
        $article->content = $request->content;
        $article->subtitle = $request->subtitle;
        $article->subcontent = $request->subcontent;
        $article->slug = $request->slug;

        // Cek apakah ada file image1 yang diupload
        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $image1Name = time() . '_1.' . $image1->getClientOriginalExtension();
            $image1Path = $image1->storeAs('articles', $image1Name, 'public');
            $article->image1 = $image1Path;
        }

        // Cek apakah ada file image2 yang diupload
        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $image2Name = time() . '_2.' . $image2->getClientOriginalExtension();
            $image2Path = $image2->storeAs('articles', $image2Name, 'public');
            $article->image2 = $image2Path;
        }

        // Simpan data article ke database
        $article->save();

        // Redirect ke halaman index article dengan pesan sukses
        return redirect()->route('admin.article.index')->with('success', 'Article created successfully.');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id); // Ambil data article berdasarkan id
        return view('backend.pages.articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data update
        $request->validate([
            'title' => 'required|string|max:255',
            'keyword' => 'required|string|max:255',
            'content' => 'required',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'subtitle' => 'required|string|max:255',
            'subcontent' => 'required',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'slug' => 'required|string|max:255|unique:articles,slug,' . $id,
        ]);

        $article = Article::findOrFail($id);
        $article->title = $request->title;
        $article->keyword = $request->keyword;
        $article->content = $request->content;
        $article->subtitle = $request->subtitle;
        $article->subcontent = $request->subcontent;
        $article->slug = $request->slug;

        // Jika image1 diupload, ganti gambar lama
        if ($request->hasFile('image1')) {
            if ($article->image1) {
                Storage::disk('public')->delete($article->image1);
            }
            $article->image1 = $request->file('image1')->store('articles', 'public');
        }

        // Jika image2 diupload, ganti gambar lama
        if ($request->hasFile('image2')) {
            if ($article->image2) {
                Storage::disk('public')->delete($article->image2);
            }
            $article->image2 = $request->file('image2')->store('articles', 'public');
        }

        $article->save();

        return redirect()->route('admin.article.index')->with('success', 'Article updated successfully.');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        
        // Hapus gambar jika ada
        if ($article->image1) {
            Storage::disk('public')->delete($article->image1);
        }
        if ($article->image2) {
            Storage::disk('public')->delete($article->image2);
        }

        $article->delete();

        return redirect()->route('admin.article.index')->with('success', 'Article deleted successfully.');
    }
}
