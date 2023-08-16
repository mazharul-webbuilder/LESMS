<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
            $table->string('product_name');
            $table->string('product_thumbnail')->nullable();
            $table->decimal('product_price', 10, 2);
            $table->unsignedInteger('product_quantity');
            $table->decimal('product_total_price', 10, 2);
            $table->decimal('product_discount', 5, 2)->default(0.00);
            $table->decimal('product_tax', 5, 2)->default(0.00);
            $table->decimal('product_total_tax', 10, 2);
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
}
