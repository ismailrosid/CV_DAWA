<?php

namespace App\Http\Controllers\FrontPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\ProductHelper;
use App\Models\TmstKategoriProdukModel;
use App\Models\TmstProdukModel;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $kategori = TmstKategoriProdukModel::all();
        $products = ProductHelper::filterProduk($request);

        return view('frontpage.pages.shop.index', compact('kategori', 'products'));
    }
    public function show($id)
    {
        // Mengambil data produk beserta kategori, namun hanya mengambil nama kategori
        $produk = TmstProdukModel::with('kategori:id,nama') // Mengambil hanya kolom 'id' dan 'nama' dari kategori
            ->findOrFail($id);

        $produk->tidak_disarankan = explode('|||', $produk->tidak_disarankan);
        $input = $produk->komposisi;
        $produk->komposisi = explode('|||', $produk->komposisi);
        $produk->anjuran_pemakaian = explode('|||', $produk->anjuran_pemakaian);


        // Pisahkan berdasarkan "+++" untuk memproses data
        $groups = explode("+++", $input);

        $result = [];
        $currentKey = null;

        foreach ($groups as $group) {
            // Hapus spasi dan pastikan tidak ada grup kosong
            $group = trim($group);
            if ($group === "") {
                continue;
            }

            // Jika grup adalah sebuah kata kunci (seperti "test", "example", "demo")
            if (!is_numeric($group) && strpos($group, "|||") === false) {
                // Set nilai kunci yang akan digunakan
                $currentKey = $group;
            } else {
                // Pisahkan data dengan "|||"
                $items = explode("|||", trim($group, "|||"));

                // Tambahkan data dengan kunci dinamis
                $result[] = [$currentKey => $items];
            }
        }


        // Mengirimkan data produk ke view
        return view('frontpage.pages.shop.show', compact('produk', 'result'));
    }
}
