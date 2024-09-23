<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'tmst_product'; // Nama tabel
    protected $primaryKey = 'product_id'; // Primary key
    protected $fillable = [
        'product_name',
        'product_description',
        'price',
        'stock_quantity',
        'category_id',
        'image_url',
        'is_active'
    ];

    // Relasi ke model Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }
}
