<?php

namespace App\Http\Controllers\FrontPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\TumbuhanHelper; // Tambahkan import TumbuhanHelper
use App\Models\Tumbuhan; // Tambahkan import TumbuhanHelper
use PDF; // Memanggil alias

class TumbuhanController extends Controller
{
    public function index(Request $request)
    {


        // Gunakan helper untuk memfilter data tumbuhan
        $tumbuhan = TumbuhanHelper::filterTumbuhan($request);

        // Kirim data ke view, termasuk categories jika diperlukan
        return view('frontpage.pages.tumbuhan', compact('tumbuhan'));
    }

    public function show($id)
    {
        // Ambil data tumbuhan berdasarkan ID
        $tumbuhan = Tumbuhan::find($id);

        // Pastikan tumbuhan ditemukan
        if (!$tumbuhan) {
            abort(404); // atau bisa kembalikan respons lain
        }

        // Data untuk view
        $data = [
            'title' => $tumbuhan->nama_tumbuhan,
            'nama_latin' => $tumbuhan->nama_latin,
            'sinonim' => $tumbuhan->sinonim,
            'nama_daerah' => $tumbuhan->nama_daerah,
            'klasifikasi' => [
                'kerajaan' => $tumbuhan->kerajaan,
                'sub_kerajaan' => $tumbuhan->sub_kerajaan,
                'super_divisi' => $tumbuhan->super_divisi,
                'divisi' => $tumbuhan->divisi,
                'kelas' => $tumbuhan->kelas,
                'sub_kelas' => $tumbuhan->sub_kelas,
                'ordo' => $tumbuhan->ordo,
                'famili' => $tumbuhan->famili,
                'genus' => $tumbuhan->genus,
                'spesies' => $tumbuhan->spesies,
            ],
            'deskripsi' => $tumbuhan->deskripsi,
            'bagian_yg_digunakan' => $tumbuhan->bagian_yg_digunakan,
            'konstituen' => $tumbuhan->konstituen,
            'indikasi' => $tumbuhan->indikasi,
        ];

        // Load view dan convert menjadi PDF
        $pdf = PDF::loadView('pdf_template', $data);

        // Tampilkan file PDF di browser
        return $pdf->stream('DETAIl_TUMBUHAN.pdf');
    }
}
