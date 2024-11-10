<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TmstKategoriInformasiModel; // Pastikan model ini di-import
use App\Models\TmstTipsHerbalModel; // Pastikan model ini di-import
use PDO;

class TipsHerbalController extends Controller
{
    //
    public function index()
    {
        return view('admin.pages.tips-herbal.index');
    }

    public function create()
    {
        // Ambil semua kategori dari database
        $kategori = TmstKategoriInformasiModel::all(); // Mengambil semua data kategori

        // Kirim data kategori ke view
        return view('admin.pages.tips-herbal.create', compact('kategori')); // Menggunakan compact untuk mengirim variabel ke view
    }

    public function store(Request $request)
    {
        // Menyimpan data tips herbal
        $tipsHerbal = new TmstTipsHerbalModel();
        $tipsHerbal->judul = $request->judul; // Menyimpan judul tips
        $tipsHerbal->tips = $request->tips; // Menyimpan deskripsi tips
        $tipsHerbal->manfaat = $request->manfaat; // Menyimpan manfaat tips
        $tipsHerbal->id_kategori = $request->id_kategori; // Menyimpan ID kategori yang terkait
        $tipsHerbal->save(); // Simpan data tips herbal

        // Redirect atau memberikan response setelah menyimpan data
        return redirect()->route('admin.tips-herbal.index')->with('success', 'Tips herbal berhasil disimpan!');
    }

    public function edit($id)
    {
        // Ambil data tips herbal berdasarkan ID
        $tipsHerbal = TmstTipsHerbalModel::findOrFail($id);

        // Kirim data tips herbal dan kategori ke view
        return view('admin.pages.tips-herbal.edit', compact('tipsHerbal'));
    }


    public function update(Request $request, $id)
    {
        // Validasi input jika diperlukan
    

        // Temukan data tips herbal berdasarkan ID
        $tipsHerbal = TmstTipsHerbalModel::findOrFail($id);

        // Perbarui data tips herbal berdasarkan input
        $tipsHerbal->judul = $request->judul;
        $tipsHerbal->tips = $request->tips;
        $tipsHerbal->manfaat = $request->manfaat;
        $tipsHerbal->id_kategori = $request->id_kategori;

        // Simpan perubahan
        $tipsHerbal->update();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('admin.tips-herbal.index')->with('success', 'Tips herbal berhasil diperbarui!');
    }


    public function destroy($id)
    {
        // Mencari tumbuhan berdasarkan ID dan menghapusnya
        $tumbuhan = TmstTipsHerbalModel::find($id);
        if ($tumbuhan) {
            $tumbuhan->delete();
            return response()->json(['success' => 'Data tips herbal berhasil dihapus.']);
        }
        return response()->json(['error' => 'Data tidak ditemukan.'], 404);
    }
    // InformasiController.php
    // InformasiController.php
    public function getData()
    {
        // Query untuk mengambil data tips herbal
        $query = TmstTipsHerbalModel::select('id', 'judul', 'tips', 'manfaat');

        return datatables()->of($query)
            ->addIndexColumn() // Menambahkan kolom nomor urut
            ->make(true); // Mengembalikan data dalam format JSON
    }
}
