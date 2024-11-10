<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TmstKategoriInformasiModel; // Pastikan model ini di-import
use App\Models\TmstHdrArtikelModel; // Pastikan model ini di-import
use App\Models\TmstDtlArtikelModel; // Pastikan model ini di-import
use PDO;

class ArtikelController extends Controller
{
    //
    public function index()
    {
        return view('admin.pages.artikel.index');
    }

    public function create()
    {
        // Ambil semua kategori dari database
        $kategori = TmstKategoriInformasiModel::all(); // Mengambil semua data kategori

        // Kirim data kategori ke view
        return view('admin.pages.artikel.create', compact('kategori')); // Menggunakan compact untuk mengirim variabel ke view
    }

    public function store(Request $request)
    {
        // Menyimpan data header artikel
        $artikel = new TmstHdrArtikelModel();
        $artikel->nama = $request->nama;
        $artikel->judul = $request->judul;
        $artikel->deskripsi = $request->deskripsi;
        $artikel->kombinasi_herbal = $request->kombinasi_herbal;
        $artikel->kesimpulan = $request->kesimpulan;
        $artikel->id_kategori = $request->id_kategori;
        $artikel->save(); // Simpan data header

        // Menyimpan detail artikel
        foreach ($request->nama_herbal as $index => $namaHerbal) {
            $detail = new TmstDtlArtikelModel();
            $detail->nama_herbal = $namaHerbal;
            $detail->manfaat = $request->manfaat[$index] ?? null; // Menangani jika manfaat tidak ada
            $detail->deskripsi_herbal = $request->deskripsi_herbal[$index] ?? null; // Menangani jika deskripsi tidak ada
            $detail->cara_kerja = $request->cara_kerja[$index] ?? null; // Menangani jika cara kerja tidak ada
            $detail->cara_konsumsi = $request->cara_konsumsi[$index] ?? null; // Menangani jika cara konsumsi tidak ada
            $detail->id_artikel = $artikel->id; // Menghubungkan detail dengan header
            $detail->save(); // Simpan detail artikel
        }

        // Redirect atau memberikan response setelah menyimpan data
        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil disimpan!');
    }

    public function edit($id)
    {
        // Ambil data header artikel berdasarkan ID
        $artikel = TmstHdrArtikelModel::findOrFail($id);

        // Ambil detail artikel yang terkait dengan ID artikel
        $detailArtikels = TmstDtlArtikelModel::where('id_artikel', $id)->get();

        // Redirect ke halaman edit dengan data artikel dan detail artikel
        return view('admin.pages.artikel.edit', compact('artikel', 'detailArtikels'));
    }

    public function update(Request $request, $id)
    {
        // Temukan data header artikel berdasarkan ID
        $artikel = TmstHdrArtikelModel::findOrFail($id);

        // Perbarui data header artikel berdasarkan input
        $artikel->nama = $request->nama;
        $artikel->judul = $request->judul;
        $artikel->deskripsi = $request->deskripsi;
        $artikel->kombinasi_herbal = $request->kombinasi_herbal;
        $artikel->kesimpulan = $request->kesimpulan;
        $artikel->id_kategori = $request->id_kategori;
        $artikel->save();

        // Hapus detail artikel yang lama terkait artikel ini
        TmstDtlArtikelModel::where('id_artikel', $id)->delete();

        // Simpan detail artikel yang baru
        foreach ($request->nama_herbal as $index => $namaHerbal) {
            $detail = new TmstDtlArtikelModel();
            $detail->nama_herbal = $namaHerbal;
            $detail->manfaat = $request->manfaat[$index] ?? null;
            $detail->deskripsi_herbal = $request->deskripsi_herbal[$index] ?? null;
            $detail->cara_kerja = $request->cara_kerja[$index] ?? null;
            $detail->cara_konsumsi = $request->cara_konsumsi[$index] ?? null;
            $detail->id_artikel = $artikel->id; // Menghubungkan detail dengan header
            $detail->save();
        }

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil diperbarui!');
    }


    public function destroy($id)
    {
        // Mencari tumbuhan berdasarkan ID dan menghapusnya
        $tumbuhan = TmstHdrArtikelModel::find($id);
        if ($tumbuhan) {
            $tumbuhan->delete();
            return response()->json(['success' => 'Data tumbuhan berhasil dihapus.']);
        }
        return response()->json(['error' => 'Data tidak ditemukan.'], 404);
    }
    // InformasiController.php
    // InformasiController.php
    public function getData()
    {
        // Query dasar untuk mengambil data artikel tanpa relasi kategori
        $query = TmstHdrArtikelModel::select('id', 'nama', 'judul', 'deskripsi', 'kesimpulan');

        return datatables()->of($query)
            ->make(true); // Mengembalikan data dalam format JSON
    }
}
