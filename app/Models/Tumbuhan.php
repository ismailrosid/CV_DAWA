<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model untuk tabel tmst_tanaman.
 *
 * @property int $id
 * @property string $nama_tanaman
 * @property string $nama_latin
 * @property string|null $sinonim
 * @property string|null $nama_daerah
 * @property string|null $kerajaan
 * @property string|null $sub_kerajaan
 * @property string|null $super_divisi
 * @property string|null $divisi
 * @property string|null $kelas
 * @property string|null $sub_kelas
 * @property string|null $ordo
 * @property string|null $famili
 * @property string|null $genus
 * @property string|null $spesies
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class Tumbuhan extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terkait dengan model ini.
     *
     * @var string
     */
    protected $table = 'tmst_tumbuhan';

    /**
     * Atribut yang dapat diisi secara massal.
     *
     * @var array
     */
    protected $fillable = [
        'nama_tumbuhan',
        'nama_latin',
        'sinonim',
        'nama_daerah',
        'kerajaan',
        'sub_kerajaan',
        'super_divisi',
        'divisi',
        'kelas',
        'sub_kelas',
        'ordo',
        'famili',
        'genus',
        'spesies',
    ];

    /**
     * Tipe atribut tanggal.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
