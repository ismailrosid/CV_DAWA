<?php

namespace App\Http\Controllers\FrontPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ProductHelper;
use App\Models\Category;

class TentangKamiController extends Controller
{
    public function index(Request $request)
    {
        return view('frontpage.pages.tentang_kami.index');
    }
}
