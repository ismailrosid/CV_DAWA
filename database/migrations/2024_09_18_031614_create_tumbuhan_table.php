<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Buat tabel tmst_tumbuhan dengan kolom-kolom yang diperlukan.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmst_tumbuhan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tumbuhan');
            $table->string('nama_latin');
            $table->text('sinonim')->nullable();
            $table->text('nama_daerah')->nullable();
            $table->string('kerajaan')->nullable();
            $table->string('sub_kerajaan')->nullable();
            $table->string('super_divisi')->nullable();
            $table->string('divisi')->nullable();
            $table->string('kelas')->nullable();
            $table->string('sub_kelas')->nullable();
            $table->string('ordo')->nullable();
            $table->string('famili')->nullable();
            $table->string('genus')->nullable();
            $table->string('spesies')->nullable();
            $table->text('deskripsi')->nullable();
            $table->text('bagian_yg_digunakan')->nullable();
            $table->text('konstituen')->nullable();
            $table->text('indikasi')->nullable();
            $table->text('penggunaan_tradisional')->nullable();
            $table->text('dosis_harian')->nullable();
            $table->text('kontra_indikasi')->nullable();
            $table->text('interaksi')->nullable();
            $table->text('efek_samping')->nullable();
            $table->text('dapus')->nullable();
            $table->text('sumber_internet')->nullable();
            $table->text('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Hapus tabel tmst_tanaman.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tmst_tumbuhan');
    }
};
