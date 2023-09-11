<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payments')->insert([
            [
                'name' => 'cod',
                'phone' => null,
                'account_type' => null,
                'image' => null
            ],
            [
                'name' => 'bkash',
                'phone' => '01973217348',
                'account_type' => 'personal',
                'image' => null
            ],
            [
                'name' => 'Nogad',
                'phone' => '01973217348',
                'account_type' => 'personal',
                'image' => null
            ],
            [
                'name' => 'Rocker',
                'phone' => '01973217348',
                'account_type' => 'personal',
                'image' => null
            ],
        ]);
    }

}
