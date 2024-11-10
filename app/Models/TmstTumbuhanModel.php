<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model untuk tabel tmst_tumbuhan.
 *
 * @property int $id
 * @property string $nama_tumbuhan
 * @property string $nama_latin
 * @property string|null $sinonims
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
 * @property string|null $deskripsi
 * @property string|null $bagian_yang_digunakan
 * @property string|null $konstituen
 * @property string|null $indikasi
 * @property string|null $penggunaan_tradisional
 * @property string|null $dosis_harian
 * @property string|null $kontraindikasi
 * @property string|null $interaksi
 * @property string|null $efek_samping
 * @property string|null $dapus
 * @property string|null $sumber_internet
 * @property string|null $daftar_pustaka
 * @property string|null $link_gambar
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class TmstTumbuhanModel extends Model
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
        'gambar',                // name="nama_tumbuhan"
        'nama_tumbuhan',                // name="nama_tumbuhan"
        'nama_latin',                   // name="nama_latin"
        'sinonim',                      // name="sinonims[]"
        'nama_daerah',                  // name="nama_daerah"
        'kerajaan',                     // name="kerajaan"
        'sub_kerajaan',                 // name="sub_kerajaan"
        'super_divisi',                 // name="super_divisi"
        'divisi',                       // name="divisi"
        'kelas',                        // name="kelas"
        'sub_kelas',                    // name="sub_kelas"
        'ordo',                         // name="ordo"
        'famili',                       // name="famili"
        'genus',                        // name="genus"
        'spesies',                      // name="spesies"
        'deskripsi',                    // name="deskripsi"
        'bagian_yang_digunakan',       // name="bagian_yang_digunakan"
        'konstituen',                   // name="konstituen"
        'indikasi',                     // name="indikasi"
        'penggunaan_tradisional',       // name="penggunaan_tradisional"
        'dosis_harian',                 // name="dosis_harian"
        'kontra_indikasi',               // name="kontraindikasi"
        'interaksi',                    // name="interaksi"
        'efek_samping',                 // name="efek_samping"
        'dapus',                        // name="dapus"
        'sumber_internet',              // name="sumber_internet[]"
        'daftar_pustaka',               // name="daftar_pustaka[]"
        'link_gambar',                  // name="link_gambar[]"
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
