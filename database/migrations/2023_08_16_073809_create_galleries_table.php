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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('original_path');  // Original image
            $table->string('sm_path')->nullable();  // Small version
            $table->string('m_path')->nullable();   // Medium version
            $table->string('l_path')->nullable();   // Large version
            $table->string('file_extension');  // Extension of the original image
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
