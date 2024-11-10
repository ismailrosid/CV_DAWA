<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TmstProdukModel;
use App\Models\TmstTumbuhanModel;
use App\Models\TmstHdrArtikelModel;
use App\Models\TmstTipsHerbalModel;

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung total produk
        $totalProduk = TmstProdukModel::count();

        // Hitung total tumbuhan
        $totalTumbuhan = TmstTumbuhanModel::count();

        // Hitung total informasi (gabungan artikel dan tips)
        $totalArtikel = TmstHdrArtikelModel::count();
        $totalTips = TmstTipsHerbalModel::count();

        // Kirim data ke view
        return view('admin.pages.dashboard.index', compact('totalProduk', 'totalTumbuhan', 'totalArtikel', 'totalTips'));
    }
}
