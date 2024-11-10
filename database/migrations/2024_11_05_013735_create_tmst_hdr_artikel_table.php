<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmst_hdr_artikel', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable(); // Nama produk, misalnya "Jahe"
            $table->string('judul')->nullable(); // Judul deskripsi, misalnya "Si Penghangat yang Kaya Manfaat"
            $table->text('deskripsi')->nullable();
            $table->text('kombinasi_herbal')->nullable(); // Kesimpulan atau ringkasan artikel
            $table->text('kesimpulan')->nullable(); // Kesimpulan atau ringkasan artikel
            $table->unsignedBigInteger('id_kategori'); // ID kategori yang terkait
            $table->timestamps(); // Waktu dibuat dan diubah

            // Membuat foreign key untuk relasi ke tabel tmst_kategori_informasi
            $table->foreign('id_kategori')->references('id')->on('tmst_kategori_informasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tmst_hdr_artikel', function (Blueprint $table) {
            $table->dropForeign(['id_kategori']); // Menghapus foreign key
        });

        Schema::dropIfExists('tmst_hdr_artikel');
    }
};
