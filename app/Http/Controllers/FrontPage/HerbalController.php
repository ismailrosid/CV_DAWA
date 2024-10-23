<?php

namespace App\Http\Controllers\FrontPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HerbalController extends Controller
{
    public function index(Request $request)
    {
        return view('frontpage.pages.herbal.index');
    }
}
