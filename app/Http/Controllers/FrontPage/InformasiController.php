<?php

namespace App\Http\Controllers\FrontPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\InformasiHelper;
use App\Models\TmstKategoriInformasiModel;
use App\Models\TmstHdrArtikelModel;
use App\Models\TmstDtlArtikelModel;

class InformasiController extends Controller
{
    public function index(Request $request)
    {
        // Ambil data informasi yang difilter dan kategori
        $informasi = InformasiHelper::filterInformasi($request);
        $kategoriInformasi = TmstKategoriInformasiModel::all();

        return view('frontpage.pages.informasi.index', compact('informasi', 'kategoriInformasi'));
    }

    public function show($id)
    {
        // Ambil data artikel berdasarkan ID
        // Ambil data artikel dan detailnya menggunakan eager loading
        $data = TmstHdrArtikelModel::with('detail')->find($id);

        return view('frontpage.pages.informasi.show', compact('data'));
        // Jika artikel dan detail ditemukan, kirimkan ke view
        // return view('frontpage.pages.informasi.show', compact('data', 'detail'));
    }
}
