<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TmstTumbuhanModel; // Pastikan untuk mengimpor model
use Illuminate\Http\Request;
use App\Helpers\DataTableHelper;

class TumbuhanController extends Controller
{
    //
    public function index()
    {
        return view('admin.pages.tumbuhan.index');
    }

    public function create()
    {
        return view('admin.pages.tumbuhan.create');
    }

    public function store(Request $request)
    {
        // Menggabungkan data sinonim, sumber_internet, link_gambar, dan daftar_pustaka menjadi string
        $sinonims = implode('|||', $request->input('sinonims', []));
        $sumber_internet = implode('|||', $request->input('sumber_internet', []));
        $link_gambar = implode('|||', $request->input('link_gambar', []));
        $daftar_pustaka = implode('|||', $request->input('daftar_pustaka', [])); // Menambahkan daftar pustaka

        // Simpan data ke database
        $tumbuhan = new TmstTumbuhanModel();
        $tumbuhan->nama = $request->nama_tumbuhan;
        $tumbuhan->nama_latin = $request->nama_latin;
        $tumbuhan->sinonim = $sinonims; // Simpan sebagai string
        $tumbuhan->nama_daerah = $request->nama_daerah;
        $tumbuhan->kerajaan = $request->kerajaan;
        $tumbuhan->sub_kerajaan = $request->sub_kerajaan;
        $tumbuhan->super_divisi = $request->super_divisi;
        $tumbuhan->divisi = $request->divisi;
        $tumbuhan->kelas = $request->kelas;
        $tumbuhan->sub_kelas = $request->sub_kelas;
        $tumbuhan->ordo = $request->ordo;
        $tumbuhan->famili = $request->famili;
        $tumbuhan->genus = $request->genus;
        $tumbuhan->spesies = $request->spesies;
        $tumbuhan->deskripsi = $request->deskripsi;
        $tumbuhan->bagian_yang_digunakan = $request->bagian_yang_digunakan;
        $tumbuhan->konstituen = $request->konstituen;
        $tumbuhan->indikasi = $request->indikasi;
        $tumbuhan->penggunaan_tradisional = $request->penggunaan_tradisional;
        $tumbuhan->dosis_harian = $request->dosis_harian;
        $tumbuhan->kontra_indikasi = $request->kontraindikasi;
        $tumbuhan->interaksi = $request->interaksi;
        $tumbuhan->efek_samping = $request->efek_samping;
        $tumbuhan->dapus = $request->dapus;
        $tumbuhan->sumber_internet = $sumber_internet; // Simpan sebagai string
        $tumbuhan->daftar_pustaka = $daftar_pustaka; // Simpan sebagai string
        $tumbuhan->link_gambar = $link_gambar; // Simpan sebagai string

        // Menyimpan gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName(); // Membuat nama file unik
            $file->move(public_path('/front/img/tumbuhan'), $filename); // Pindahkan file ke folder public/gambar
            $tumbuhan->gambar = $filename; // Simpan nama file ke field gambar
        }

        $tumbuhan->save();

        return redirect()->route('admin.tumbuhan.index')->with('success', 'Data tumbuhan berhasil disimpan.');
    }

    public function edit($id)
    {
        $tumbuhan = TmstTumbuhanModel::findOrFail($id);
        // Mengonversi data yang digabungkan kembali menjadi array
        $tumbuhan->sinonims = explode('|||', $tumbuhan->sinonim);
        $tumbuhan->sumber_internet = explode('|||', $tumbuhan->sumber_internet);
        $tumbuhan->link_gambar = explode('|||', $tumbuhan->link_gambar);
        $tumbuhan->daftar_pustaka = explode('|||', $tumbuhan->daftar_pustaka);
        // echo '<pre>';
        // print_r($tumbuhan);
        // echo '</pre>';
        // die;
        return view('admin.pages.tumbuhan.edit', compact('tumbuhan'));
    }

    public function update(Request $request, $id)
    {
        // Menggabungkan data sinonim, sumber_internet, link_gambar, dan daftar_pustaka menjadi string
        $sinonims = implode('|||', $request->input('sinonims', []));
        $sumber_internet = implode('|||', $request->input('sumber_internet', []));
        $link_gambar = implode('|||', $request->input('link_gambar', []));
        $daftar_pustaka = implode('|||', $request->input('daftar_pustaka', [])); // Menambahkan daftar pustaka

        // Mencari data tumbuhan berdasarkan ID
        $tumbuhan = TmstTumbuhanModel::findOrFail($id);

        // Memperbarui data tumbuhan
        $tumbuhan->nama = $request->nama_tumbuhan;
        $tumbuhan->nama_latin = $request->nama_latin;
        $tumbuhan->sinonim = $sinonims; // Simpan sebagai string
        $tumbuhan->nama_daerah = $request->nama_daerah;
        $tumbuhan->kerajaan = $request->kerajaan;
        $tumbuhan->sub_kerajaan = $request->sub_kerajaan;
        $tumbuhan->super_divisi = $request->super_divisi;
        $tumbuhan->divisi = $request->divisi;
        $tumbuhan->kelas = $request->kelas;
        $tumbuhan->sub_kelas = $request->sub_kelas;
        $tumbuhan->ordo = $request->ordo;
        $tumbuhan->famili = $request->famili;
        $tumbuhan->genus = $request->genus;
        $tumbuhan->spesies = $request->spesies;
        $tumbuhan->deskripsi = $request->deskripsi;
        $tumbuhan->bagian_yang_digunakan = $request->bagian_yang_digunakan;
        $tumbuhan->konstituen = $request->konstituen;
        $tumbuhan->indikasi = $request->indikasi;
        $tumbuhan->penggunaan_tradisional = $request->penggunaan_tradisional;
        $tumbuhan->dosis_harian = $request->dosis_harian;
        $tumbuhan->kontra_indikasi = $request->kontraindikasi;
        $tumbuhan->interaksi = $request->interaksi;
        $tumbuhan->efek_samping = $request->efek_samping;
        $tumbuhan->dapus = $request->dapus;
        $tumbuhan->sumber_internet = $sumber_internet; // Simpan sebagai string
        $tumbuhan->daftar_pustaka = $daftar_pustaka; // Simpan sebagai string
        $tumbuhan->link_gambar = $link_gambar; // Simpan sebagai string

        // Menyimpan gambar
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($tumbuhan->gambar) {
                $oldImagePath = public_path('front/img/tumbuhan/' . $tumbuhan->gambar);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath); // Menghapus gambar lama dari server
                }
            }

            // Upload gambar baru
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName(); // Membuat nama file unik
            $file->move(public_path('/front/img/tumbuhan'), $filename); // Pindahkan file ke folder public/gambar
            $tumbuhan->gambar = $filename; // Simpan nama file ke field gambar
        }

        // Simpan perubahan ke database
        $tumbuhan->update();

        return redirect()->route('admin.tumbuhan.index')->with('success', 'Data tumbuhan berhasil diupdate.');
    }

    public function destroy($id)
    {
        // Mencari tumbuhan berdasarkan ID dan menghapusnya
        $tumbuhan = TmstTumbuhanModel::find($id);
        if ($tumbuhan) {
            $tumbuhan->delete();
            return response()->json(['success' => 'Data tumbuhan berhasil dihapus.']);
        }
        return response()->json(['error' => 'Data tidak ditemukan.'], 404);
    }

    public function getData()
    {
        // Query dasar untuk mengambil data tumbuhan

        $query = TmstTumbuhanModel::select('id', 'nama', 'nama_latin', 'deskripsi');

        return datatables()->of($query)
            ->addIndexColumn() // Menambahkan kolom nomor urut
            ->make(true); // Mengembalikan data dalam format JSON
    }
}
