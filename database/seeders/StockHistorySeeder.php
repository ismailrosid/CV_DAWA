<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StockHistory;
use Carbon\Carbon;

class StockHistorySeeder extends Seeder
{
    public function run()
    {
        StockHistory::create([
            'product_id' => 1,
            'change_date' => Carbon::now(),
            'change_type' => 'penambahan',
            'quantity_changed' => 50,
            'initial_stock_quantity' => 100,
            'final_stock_quantity' => 150,
            'description' => 'Penambahan stok dari supplier.'
        ]);

        StockHistory::create([
            'product_id' => 2,
            'change_date' => Carbon::now(),
            'change_type' => 'pengurangan',
            'quantity_changed' => 10,
            'initial_stock_quantity' => 50,
            'final_stock_quantity' => 40,
            'description' => 'Penjualan produk.'
        ]);
    }
}
