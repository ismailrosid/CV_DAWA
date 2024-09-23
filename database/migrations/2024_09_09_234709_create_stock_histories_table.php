<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ttrx_stock_history', function (Blueprint $table) {
            $table->id('stock_history_id'); // Primary Key
            $table->unsignedBigInteger('product_id'); // Foreign Key ke tmst_product
            $table->dateTime('change_date'); // Tanggal perubahan stok
            $table->string('change_type'); // Jenis perubahan stok (misalnya: 'penambahan', 'pengurangan')
            $table->integer('quantity_changed'); // Jumlah stok yang berubah
            $table->integer('initial_stock_quantity'); // Stok awal sebelum perubahan
            $table->integer('final_stock_quantity'); // Stok akhir setelah perubahan
            $table->text('description')->nullable(); // Deskripsi perubahan
            $table->timestamps(); // Created at dan Updated at

            // Foreign Key Constraint
            $table->foreign('product_id')->references('product_id')->on('tmst_product');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ttrx_stock_history');
    }
};
