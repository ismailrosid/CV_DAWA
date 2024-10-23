<?php

namespace App\Http\Controllers\FrontPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ProductHelper;
use App\Models\Category;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $products = ProductHelper::filterProducts($request);

        // print_r($products);
        // die;
        return view('frontpage.pages.shop.index', compact('categories', 'products'));
    }

    public function show($id)
    {
        return view('frontpage.pages.shop.show');
    }
}
