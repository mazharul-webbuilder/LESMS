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
            $table->string('order_number')->unique();
            $table->unsignedBigInteger('payment_id');
            $table->string('order_note')->nullable();
            $table->string('transaction_number')->nullable();
            $table->enum('payment_status', ['paid', 'unpaid'])->default('unpaid');
            $table->decimal('sub_total', 10, 2)->nullable();
            $table->decimal('grand_total', 10, 2);
            $table->decimal('shipping_charges');
            $table->decimal('tax_amount')->nullable();
            $table->integer('total_item');
            $table->enum('order_status', ['pending', 'processing', 'shipping', 'delivered', 'decline'])->default('pending');
            $table->timestamp('delivery_date')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('payment_id')->references('id')->on('payments');
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
