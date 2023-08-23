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
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('product_code');
            $table->string('short_description');
            $table->unsignedBigInteger('product_category_id')->nullable();
            $table->unsignedBigInteger('product_brand_id')->nullable();
            $table->longText('description');
            $table->string('thumbnail_image');
            $table->double('previous_price', 10, 2)->nullable();
            $table->double('current_price', 10, 2);
            $table->double('purchase_price', 10, 2)->nullable();
            $table->integer('minimum_order_quantity')->default(1);
            $table->longText('privacy_policy')->nullable();
            $table->longText('return_policy')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('flash_deal')->default(0);
            $table->tinyInteger('featured')->default(0);
            $table->tinyInteger('best_sale')->default(0);
            $table->tinyInteger('trending')->default(0);
            $table->tinyInteger('recent_product')->default(0);
            $table->tinyInteger('seo')->default(1);
            $table->text('tags')->nullable();
            $table->text('meta_tags')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamps();

            $table->foreign('product_category_id')->references('id')->on('product_categories');
            $table->foreign('product_brand_id')->references('id')->on('product_brands');
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
