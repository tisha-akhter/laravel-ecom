<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('sub_cat_id');
            $table->double('regular_price');
            $table->double('discount_price');
            $table->double('buying_price');
            $table->integer('Quantity');
            $table->string('sku_code');
            $table->string('product_type');
            $table->string('rating');
            $table->longText('description');
            $table->longText('product_policy');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
