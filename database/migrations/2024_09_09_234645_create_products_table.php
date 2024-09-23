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
        Schema::create('tmst_product', function (Blueprint $table) {
            $table->id('product_id'); // Primary Key
            $table->string('product_name');
            $table->text('product_description')->nullable();
            $table->decimal('price', 10, 2);
            $table->integer('stock_quantity');
            $table->unsignedBigInteger('category_id'); // Foreign Key
            $table->string('image_url')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps(); // Created at and Updated at

            // Foreign Key Constraint
            $table->foreign('category_id')->references('category_id')->on('tmst_category');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tmst_product');
    }
};
