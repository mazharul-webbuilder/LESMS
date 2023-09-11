<?php

namespace Database\Seeders;

use App\Helpers\AdminHelper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'first_name' => 'Demo',
                'last_name' => 'User 1',
                'email' => 'demouser1@test.com',
                'phone' => '01698587489',
                'own_referral_code' => RegisteredUserController::getOwnReferralCode(),
                'address' => fake()->sentence(5),
                'password' => Hash::make(12345678),
            ], [
                'first_name' => 'Demo',
                'last_name' => 'User 2',
                'email' => 'demouser2@test.com',
                'phone' => '01587453695',
                'own_referral_code' => RegisteredUserController::getOwnReferralCode(),
                'address' => fake()->sentence(5),
                'password' => Hash::make(12345678),
            ], [
                'first_name' => 'Demo',
                'last_name' => 'User 3',
                'email' => 'demouser3@test.com',
                'phone' => '01969857412',
                'own_referral_code' => RegisteredUserController::getOwnReferralCode(),
                'address' => fake()->sentence(5),
                'password' => Hash::make(12345678),
            ]
        ]);
    }
}
