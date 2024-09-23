<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockHistory extends Model
{
    use HasFactory;

    protected $table = 'ttrx_stock_history'; // Nama tabel
    protected $fillable = [
        'product_id',
        'change_date',
        'change_type',
        'quantity_changed',
        'initial_stock_quantity',
        'final_stock_quantity',
        'description'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }
}
