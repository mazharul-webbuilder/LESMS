<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Ecommerce\EcommerceController;



Route::get('/products', [EcommerceController::class, 'index']);

