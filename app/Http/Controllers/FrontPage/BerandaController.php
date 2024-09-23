<?php

namespace App\Http\Controllers\FrontPage;

use App\Http\Controllers\Controller;
use App\Models\Tumbuhan; // Pastikan model ini ada
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        // Mengambil 3 tumbuhan terakhir dari database
        $tumbuhan = Tumbuhan::orderBy('created_at', 'desc')->take(3)->get();

        return view('frontpage.pages.beranda', compact('tumbuhan'));
    }
}
