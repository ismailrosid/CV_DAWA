<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KategoriProdukModel;

class KategoriProdukSeeder extends Seeder
{
    public function run()
    {
        KategoriProdukModel::create(['nama' => 'Herbal']);
        KategoriProdukModel::create(['nama' => 'Lemon Tea']);
        KategoriProdukModel::create(['nama' => 'Madu']);
        KategoriProdukModel::create(['nama' => 'Buku']);
    }
}
