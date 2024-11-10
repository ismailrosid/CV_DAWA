<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TmstDtlArtikelModel extends Model
{
    use HasFactory;

    protected $table = 'tmst_dtl_artikel'; // Nama tabel
    protected $primaryKey = 'id'; // Primary key


    protected $fillable = [
        'nama_herbal',
        'manfaat',
        'deskripsi',
        'cara_kerja',
        'cara_konsumsi',
        'id_artikel',
    ];

    /**
     * Relasi ke tabel artikel.
     */
    public function artikel()
    {
        return $this->belongsTo(TmstHdrArtikelModel::class, 'id_artikel');
    }
}
