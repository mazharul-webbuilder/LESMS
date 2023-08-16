<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->timestamp('order_date')->default(now());
            $table->enum('order_status', ['pending', 'processing', 'delivered'])->default('pending');
            $table->string('payment_method');
            $table->enum('payment_status', ['paid', 'unpaid']);
            $table->decimal('total_amount', 10, 2);
            $table->timestamp('delivery_date')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
}
