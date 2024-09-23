<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['category_name' => 'Herbal']);
        Category::create(['category_name' => 'Lemon Tea']);
        Category::create(['category_name' => 'Madu']);
        Category::create(['category_name' => 'Buku']);
    }
}
