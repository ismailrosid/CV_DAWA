<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Stock;

class StockSeeder extends Seeder
{
    public function run()
    {
        Stock::create(['product_id' => 1, 'current_stock_quantity' => 100]);
        Stock::create(['product_id' => 2, 'current_stock_quantity' => 50]);
    }
}
