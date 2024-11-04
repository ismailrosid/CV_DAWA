<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Buat tabel tmst_tumbuhan dengan kolom-kolom yang diperlukan.
     *
     * Tabel ini menyimpan informasi tentang tumbuhan, termasuk
     * gambar, nama, dan berbagai atribut biologis.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmst_tumbuhan', function (Blueprint $table) {
            $table->id(); // Primary Key, ID unik untuk setiap tumbuhan
            $table->text('gambar')->nullable(); // Gambar tumbuhan
            $table->string('nama')->nullable(); // Nama tumbuhan
            $table->string('nama_latin')->nullable(); // Nama latin tumbuhan
            $table->text('sinonim')->nullable(); // Sinonim tumbuhan
            $table->string('nama_daerah')->nullable(); // Nama daerah asal
            $table->string('kerajaan')->nullable(); // Kerajaan tumbuhan
            $table->string('sub_kerajaan')->nullable(); // Sub-kerajaan tumbuhan
            $table->string('super_divisi')->nullable(); // Super divisi tumbuhan
            $table->string('divisi')->nullable(); // Divisi tumbuhan
            $table->string('kelas')->nullable(); // Kelas tumbuhan
            $table->string('sub_kelas')->nullable(); // Sub kelas tumbuhan
            $table->string('ordo')->nullable(); // Ordo tumbuhan
            $table->string('famili')->nullable(); // Famili tumbuhan
            $table->string('genus')->nullable(); // Genus tumbuhan
            $table->string('spesies')->nullable(); // Spesies tumbuhan
            $table->text('deskripsi')->nullable(); // Deskripsi tumbuhan
            $table->text('bagian_yang_digunakan')->nullable(); // Bagian yang digunakan
            $table->text('konstituen')->nullable(); // Konstituen tumbuhan
            $table->text('indikasi')->nullable(); // Indikasi penggunaan
            $table->text('penggunaan_tradisional')->nullable(); // Penggunaan tradisional
            $table->text('dosis_harian')->nullable(); // Dosis harian
            $table->text('kontra_indikasi')->nullable(); // Kontraindikasi
            $table->text('interaksi')->nullable(); // Interaksi dengan obat lain
            $table->text('efek_samping')->nullable(); // Efek samping yang mungkin terjadi
            $table->text('dapus')->nullable(); // Dapur atau bagian lainnya
            $table->text('sumber_internet')->nullable(); // Sumber informasi dari internet
            $table->text('daftar_pustaka')->nullable(); // Daftar pustaka
            $table->text('link_gambar')->nullable(); // Link gambar tumbuhan
            $table->timestamps(); // Menyimpan waktu dibuat dan diupdate
        });
    }

    /**
     * Hapus tabel tmst_tumbuhan.
     *
     * Metode ini digunakan untuk menghapus tabel jika migrasi dibatalkan.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tmst_tumbuhan'); // Menghapus tabel jika ada
    }
};
