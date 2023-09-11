<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (DB::table('products')->exists()) {
            Schema::table('products', function (Blueprint $table) {
                $table->enum('affiliate_commission_type', ['flat', 'percent'])->nullable()->after('meta_description');
                $table->double('affiliate_commission', 10, 2)->nullable()->after('affiliate_commission_type');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            if (DB::table('products')->exists()) {
                $table->dropColumn('affiliate_commission_type');
                $table->dropColumn('affiliate_commission');
            }
        });
    }
};
