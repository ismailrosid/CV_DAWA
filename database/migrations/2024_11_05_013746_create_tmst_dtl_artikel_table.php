<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel tmst_dtl_artikel.
     *
     * Tabel ini menyimpan detail tambahan terkait artikel herbal,
     * termasuk penjelasan manfaat, cara kerja, dan cara konsumsi.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmst_dtl_artikel', function (Blueprint $table) {
            $table->id();
            $table->string('nama_herbal')->nullable(); // Nama herbal, seperti "Echinacea"
            $table->string('manfaat')->nullable(); // Manfaat singkat, misalnya "Pelindung Alami Melawan Infeksi"
            $table->text('deskripsi_herbal')->nullable(); // Deskripsi herbal
            $table->text('cara_kerja')->nullable(); // Cara kerja herbal
            $table->text('cara_konsumsi')->nullable(); // Cara mengonsumsi herbal
            $table->unsignedBigInteger('id_artikel'); // Foreign key ke tabel tmst_hdr_artikel
            $table->timestamps();

            // Foreign key ke tabel tmst_hdr_artikel dengan cascade delete
            $table->foreign('id_artikel')
                ->references('id')
                ->on('tmst_hdr_artikel')
                ->onDelete('cascade');
        });
    }

    /**
     * Balikkan migrasi.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('tmst_dtl_artikel', function (Blueprint $table) {
            $table->dropForeign(['id_artikel']); // Menghapus foreign key
        });

        Schema::dropIfExists('tmst_dtl_artikel'); // Menghapus tabel
    }
};
