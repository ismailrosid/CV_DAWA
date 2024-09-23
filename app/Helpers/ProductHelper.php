<?php

namespace App\Helpers;

use App\Models\Product;

class ProductHelper
{
    public static function filterProducts($request)
    {
        // Mulai query ke model Product
        $query = Product::query();

        // Filter berdasarkan nama produk (jika ada input 'name' di request)
        if ($request->has('name') && !empty($request->name)) {
            $query->where('product_name', 'like', '%' . $request->name . '%');
        }

        // Filter berdasarkan kategori (jika ada input 'category_id' di request)
        if ($request->has('category_id') && !empty($request->category_id)) {
            $query->where('category_id', $request->category_id);
        }

        // Sorting berdasarkan pilihan pengguna
        if ($request->has('sort_by')) {
            if ($request->sort_by == 'price_low_to_high') {
                $query->orderBy('price', 'asc');
            } elseif ($request->sort_by == 'price_high_to_low') {
                $query->orderBy('price', 'desc');
            }
        }

        // Kembalikan hasil query dengan pagination (atau tanpa pagination jika diinginkan)
        return $query->paginate(10); // Ganti dengan `get()` jika tidak perlu pagination
    }
}
