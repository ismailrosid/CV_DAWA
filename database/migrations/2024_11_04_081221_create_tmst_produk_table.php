<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel tmst_produk.
     *
     * Tabel ini menyimpan informasi tentang produk,
     * termasuk gambar, nama, deskripsi, harga, kategori, dan informasi tambahan.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmst_produk', function (Blueprint $table) {
            $table->id(); // Primary Key, ID unik untuk setiap produk
            $table->string('gambar')->nullable(); // Gambar produk
            $table->string('nama')->nullable();  // Nama produk
            $table->decimal('harga', 19, 4)->nullable();  // Harga produk
            $table->text('deskripsi')->nullable(); // Deskripsi produk
            // Kolom baru yang ditambahkan
            $table->text('tidak_disarankan')->nullable(); // Tidak disarankan untuk
            $table->text('tidak_dikonsumsi_bersama_obat')->nullable(); // Tidak dikonsumsi bersama obat
            $table->text('komposisi')->nullable(); // Komposisi
            $table->string('netto')->nullable(); // Gambar produk
            $table->string('satuan')->nullable();
            $table->string('jml_halaman')->nullable(); // Gambar produk
            $table->text('anjuran_pemakaian')->nullable(); // Anjuran pemakaian
            $table->unsignedBigInteger('id_kategori'); // Foreign Key
            $table->timestamps(); // Menyimpan waktu dibuat dan diupdate

            // Foreign Key Constraint
            $table->foreign('id_kategori')->references('id')->on('tmst_kategori_produk');
        });
    }

    /**
     * Balikkan migrasi.
     *
     * Metode ini digunakan untuk menghapus tabel tmst_produk
     * jika migrasi dibatalkan.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('tmst_produk'); // Menghapus tabel jika ada
    }
};
