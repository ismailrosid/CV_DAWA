<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TmstKategoriInformasiModel;

class TmstKategoriInformasiSeeder extends Seeder
{
    public function run()
    {
        TmstKategoriInformasiModel::create(['nama' => 'Artikel']);
        TmstKategoriInformasiModel::create(['nama' => 'Tips']);
    }
}
