<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TmstHdrArtikelModel extends Model
{
    use HasFactory;

    protected $table = 'tmst_hdr_artikel'; // Nama tabel
    protected $primaryKey = 'id'; // Primary key


    protected $fillable = [
        'nama',
        'judul',
        'kombinasi_herbal',
        'kesimpulan',
        'id_kategori',
    ];

    /**
     * Relasi ke tabel kategori informasi.
     */
    public function kategori()
    {
        return $this->belongsTo(TmstKategoriInformasiModel::class, 'id_kategori');
    }

    /**
     * Relasi ke tabel detail artikel.
     */
    public function detail()
    {
        return $this->hasMany(TmstDtlArtikelModel::class, 'id_artikel');
    }
}
