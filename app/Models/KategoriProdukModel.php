<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProdukModel extends Model
{
    use HasFactory;

    protected $table = 'tmst_kategori_produk'; // Nama tabel
    protected $primaryKey = 'id'; // Primary key
    protected $fillable = ['nama']; // Kolom yang dapat diisi

    // Relasi ke model ProdukModel
    public function produk()
    {
        return $this->hasMany(ProdukModel::class, 'id_kategori', 'id');
    }
}
