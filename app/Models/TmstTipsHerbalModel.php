<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TmstTipsHerbalModel extends Model
{
    use HasFactory;

    protected $table = 'tmst_tips_herbal'; // Nama tabel
    protected $primaryKey = 'id'; // Primary key

    protected $fillable = [
        'judul',
        'tips',
        'manfaat',
        'id_kategori',
    ];

    /**
     * Relasi ke tabel kategori informasi.
     * Menghubungkan dengan kategori menggunakan foreign key 'id_kategori'.
     */
    public function kategori()
    {
        return $this->belongsTo(TmstKategoriInformasiModel::class, 'id_kategori');
    }
}
