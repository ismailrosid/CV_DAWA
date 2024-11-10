<?php

namespace App\Helpers;

use App\Models\TmstProdukModel;

class ProductHelper
{
    public static function filterProduk($request)
    {
        // Mulai query ke model Product
        $query = TmstProdukModel::query();

        // Filter berdasarkan nama produk (jika ada input 'name' di request)
        if ($request->has('name') && !empty($request->name)) {
            $query->where('nama', 'like', '%' . $request->name . '%');
        }

        // Filter berdasarkan kategori (jika ada input 'id_kategori' di request)
        if ($request->has('id_kategori') && !empty($request->id_kategori)) {
            $query->where('id_kategori', $request->id_kategori);
        }

        // Sorting berdasarkan pilihan pengguna
        if ($request->has('sort_by')) {
            if ($request->sort_by == 'price_low_to_high') {
                $query->orderBy('harga', 'asc');
            } elseif ($request->sort_by == 'price_high_to_low') {
                $query->orderBy('harga', 'desc');
            }
        }

        // Kembalikan hasil query dengan pagination (atau tanpa pagination jika diinginkan)
        return $query->paginate(10); // Ganti dengan `get()` jika tidak perlu pagination
    }
}
