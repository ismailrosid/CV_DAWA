<?php

namespace App\Http\Controllers\FrontPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FathnershipController extends Controller
{
    //
    public function index()
    {
        return view('frontpage.pages.fathnership.index');
    }
}
