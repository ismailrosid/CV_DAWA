<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel tmst_kategori_produk.
     *
     * Tabel ini menyimpan informasi tentang kategori produk
     * yang digunakan untuk mengorganisir produk dalam sistem.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmst_kategori_produk', function (Blueprint $table) {
            $table->id(); // Primary Key, ID unik untuk setiap kategori
            $table->string('nama'); // Nama kategori produk
            $table->timestamps(); // Menyimpan waktu dibuat dan diupdate
        });
    }

    /**
     * Balikkan migrasi.
     *
     * Metode ini digunakan untuk menghapus tabel tmst_kategori_produk
     * jika migrasi dibatalkan.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('tmst_kategori_produk'); // Menghapus tabel jika ada
    }
};
