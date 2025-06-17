<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        return view('datagallery', [
            'users' => Gallery::all(), 
            'title' => 'Data gallery'
        ]);
    }

    public function add()
    {
        return view('adddatagallery', [
            'title' => 'Tambah Data gallery'
        ]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Maks 2MB
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        // Proses upload file
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/gallery', $fileName, 'public'); // Simpan di storage/public/uploads/gallery

            // Simpan data ke database
            $gallery = new Gallery;
            $gallery->foto = $filePath;
            $gallery->nama = $request->input('nama');
            $gallery->deskripsi = $request->input('deskripsi');
            $gallery->save();

            return redirect()->to('/gallery')->with('success', 'Galeri berhasil ditambahkan!');
        }

        return back()->withErrors(['foto' => 'File foto gagal diunggah!']);
    }

    public function edit($id)
    {
        $gallery = Gallery::where('id', $id)->first();

        return view('editdatagallery', [
            'gallery' => $gallery,
            'title' => 'Edit Data gallery'
        ]);
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Foto opsional saat update
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $gallery = Gallery::where('id', $id)->first();

        // Proses upload file jika ada
        if ($request->hasFile('foto')) {
            // Hapus file lama jika ada
            if ($gallery->foto && Storage::disk('public')->exists($gallery->foto)) {
                Storage::disk('public')->delete($gallery->foto);
            }
            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/gallery', $fileName, 'public');
            $gallery->foto = $filePath;
        }

        // Update data
        $gallery->nama = $request->input('nama');
        $gallery->deskripsi = $request->input('deskripsi');
        $gallery->save();

        return redirect()->to('/gallery')->with('success', 'Galeri berhasil diperbarui!');
    }

    public function delete($id)
    {
        $gallery = Gallery::where('id', $id)->first();

        // Hapus file dari storage jika ada
        if ($gallery && $gallery->foto && Storage::disk('public')->exists($gallery->foto)) {
            Storage::disk('public')->delete($gallery->foto);
        }

        // Hapus data dari database
        if ($gallery) {
            $gallery->delete();
            return redirect()->back()->with('success', 'Galeri berhasil dihapus!');
        }

        return redirect()->back()->withErrors(['error' => 'Data galeri tidak ditemukan!']);
    }
}