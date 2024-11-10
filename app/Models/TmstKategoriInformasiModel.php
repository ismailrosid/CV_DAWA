<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TmstKategoriInformasiModel extends Model
{
    use HasFactory;

    protected $table = 'tmst_kategori_informasi'; // Nama tabel
    protected $primaryKey = 'id'; // Primary key
    protected $fillable = [
        'nama',
    ];

    /**
     * Relasi ke tabel artikel.
     */
    public function artikel()
    {
        return $this->hasMany(TmstHdrArtikelModel::class, 'id_kategori');
    }

    public function tipsHerbal()
    {
        return $this->hasMany(TmstTipsHerbalModel::class, 'id_kategori');
    }
}
