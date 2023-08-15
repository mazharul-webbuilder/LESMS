<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Ecommerce\EcommerceController;



Route::get('/products', [EcommerceController::class, 'index'])->name('ecommerce.products');
Route::get('/product-details', [EcommerceController::class, 'productDetails'])->name('ecommerce-product-details');

