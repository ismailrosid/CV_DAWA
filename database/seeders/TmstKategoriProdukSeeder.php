<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TmstKategoriProdukModel;

class TmstKategoriProdukSeeder extends Seeder
{
    public function run()
    {
        TmstKategoriProdukModel::create(['nama' => 'Herbal']);
        TmstKategoriProdukModel::create(['nama' => 'Lemon Tea']);
        TmstKategoriProdukModel::create(['nama' => 'Madu']);
        TmstKategoriProdukModel::create(['nama' => 'Buku']);
    }
}
