<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $table = 'tmst_stock'; // Nama tabel
    protected $fillable = ['product_id', 'current_stock_quantity'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }
}
