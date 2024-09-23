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
        $categories = Category::all();
        $products = ProductHelper::filterProducts($request);

        return view('frontpage.pages.tentang_kami', compact('categories', 'products'));
    }
}
