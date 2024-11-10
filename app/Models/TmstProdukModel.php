<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TmstProdukModel extends Model
{
    use HasFactory;

    protected $table = 'tmst_produk'; // Nama tabel
    protected $primaryKey = 'id'; // Primary key
    protected $fillable = [
        'gambar',
        'nama',
        'deskripsi',
        'harga',
        'tidak_disarankan', // Kolom baru
        'tidak_dikonsumsi_bersama_obat', // Kolom baru
        'komposisi', // Kolom baru
        'netto', // Kolom baru
        'satuan', // Kolom baru
        'jml_halaman', // Kolom baru
        'anjuran_pemakaian', // Kolom baru
        'id_kategori'
    ];

    // Relasi ke model KategoriModel
    public function kategori()
    {
        return $this->belongsTo(TmstKategoriProdukModel::class, 'id_kategori', 'id');
    }
}
