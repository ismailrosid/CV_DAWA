<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations for the tmst_tips_herbal table.
     *
     * Tabel ini menyimpan informasi tips herbal termasuk judul, 
     * deskripsi tips, manfaat, dan kategori terkait.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmst_tips_herbal', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->nullable(); // Judul tips, misalnya "Mulai Hari dengan Minuman Herbal Hangat"
            $table->text('tips')->nullable(); // Tips detail, misalnya "Awali pagi dengan secangkir teh herbal..."
            $table->text('manfaat')->nullable(); // Manfaat, misalnya "Mendukung metabolisme, meredakan peradangan..."
            $table->unsignedBigInteger('id_kategori'); // ID kategori yang terkait
            $table->timestamps(); // Waktu dibuat dan diubah

            // Membuat foreign key untuk relasi ke tabel tmst_kategori_informasi
            $table->foreign('id_kategori')
                ->references('id')
                ->on('tmst_kategori_informasi')
                ->onDelete('cascade'); // Jika kategori dihapus, tips terkait juga dihapus
        });
    }

    /**
     * Reverse the migrations for the tmst_tips_herbal table.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tmst_tips_herbal', function (Blueprint $table) {
            $table->dropForeign(['id_kategori']); // Menghapus foreign key
        });

        Schema::dropIfExists('tmst_tips_herbal'); // Menghapus tabel tips herbal
    }
};
