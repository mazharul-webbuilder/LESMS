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
        Schema::create('brand_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_brand_id');
            $table->unsignedBigInteger('product_category_id');
            $table->timestamps();

            // Declare foreign keys
            $table->foreign('product_brand_id')->references('id')->on('product_brands');
            $table->foreign('product_category_id')->references('id')->on('product_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brand_categories');
    }
};
