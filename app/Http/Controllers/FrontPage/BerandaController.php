<?php

namespace App\Http\Controllers\FrontPage;

use App\Http\Controllers\Controller;


class BerandaController extends Controller
{
    public function index()
    {
        // Mengambil 3 tumbuhan terakhir dari database
        // $tumbuhan = Tumbuhan::orderBy('created_at', 'desc')->take(3)->get();

        return view('frontpage.pages.beranda.index');
    }
}
