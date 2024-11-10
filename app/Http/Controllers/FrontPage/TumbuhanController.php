<?php

namespace App\Http\Controllers\FrontPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\TumbuhanHelper; // Tambahkan import TumbuhanHelper
use App\Models\Tumbuhan; // Tambahkan import TumbuhanHelper
use App\Models\TmstTumbuhanModel;
use PDF; // Memanggil alias

class TumbuhanController extends Controller
{
    public function index(Request $request)
    {


        // Gunakan helper untuk memfilter data tumbuhan
        $tumbuhan = TumbuhanHelper::filterTumbuhan($request);

        // Kirim data ke view, termasuk categories jika diperlukan
        return view('frontpage.pages.tumbuhan.index', compact('tumbuhan'));
    }

    public function show($id)
    {


        // Ambil data tumbuhan berdasarkan ID
        $data = TmstTumbuhanModel::find($id);

        // Gunakan helper untuk memfilter data tumbuhan
        // $tumbuhan = TumbuhanHelper::filterTumbuhan($request);
        return view('frontpage.pages.tumbuhan.show', compact('data'));
        // // Load view dan convert menjadi PDF
        // $pdf = PDF::loadView('pdf_template', $data);

        // // Tampilkan file PDF di browser
        // return $pdf->stream('DETAIl_TUMBUHAN.pdf');
    }

    // public function daf_pus()
    // {
    //     return view('frontpage.pages.tumbuhan.daftar_pustaka');
    // }
}
