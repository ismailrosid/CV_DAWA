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
        Schema::create('tmst_stock', function (Blueprint $table) {
            $table->id('stock_id'); // Primary Key
            $table->unsignedBigInteger('product_id'); // Foreign Key
            $table->integer('current_stock_quantity');
            $table->timestamps(); // Created at and Updated at

            // Foreign Key Constraint
            $table->foreign('product_id')->references('product_id')->on('tmst_product');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tmst_stock');
    }
};
