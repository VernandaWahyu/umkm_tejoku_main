<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Menampilkan daftar semua kontak
    public function index()
    {
        $contacts = Contact::all();
        return view('backend.pages.contacts.index', compact('contacts'));
    }

    // Menampilkan form untuk membuat kontak baru
    public function create()
    {
        return view('backend.pages.contacts.create');
    }

    // Menyimpan kontak baru ke database
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'text1' => 'required|string|max:255',
            'text2' => 'required|string|max:255',
            'number' => 'required|numeric',
        ]);

        // Inisialisasi model Contact dan simpan data
        $contact = new Contact();
        $contact->text1 = $request->text1;
        $contact->text2 = $request->text2;
        $contact->number = $request->number;
        $contact->save();

        // Redirect ke halaman index kontak dengan pesan sukses
        return redirect()->route('admin.contact.index')->with('success', 'Contact created successfully.');
    }

    // Menampilkan form untuk mengedit kontak tertentu
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('backend.pages.contacts.edit', compact('contact'));
    }

    // Memperbarui kontak di database
    public function update(Request $request, $id)
    {
        // Validasi data input
        $request->validate([
            'text1' => 'required|string|max:255',
            'text2' => 'required|string|max:255',
            'number' => 'required|numeric',
        ]);

        // Cari dan update kontak
        $contact = Contact::findOrFail($id);
        $contact->text1 = $request->text1;
        $contact->text2 = $request->text2;
        $contact->number = $request->number;
        $contact->save();

        // Redirect ke halaman index kontak dengan pesan sukses
        return redirect()->route('admin.contact.index')->with('success', 'Contact updated successfully.');
    }

    // Menghapus kontak dari database
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('admin.contact.index')->with('success', 'Contact deleted successfully.');
    }
}
