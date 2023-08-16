<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AdminAuthController;
use App\Http\Controllers\Backend\Ecommerce\ProductCategoryController;


// Admin Auth Routes
Route::get('admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'authenticate']);
Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Admin Authorized Routes
Route::prefix('admin/')->name('admin.')->group(function (){
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});

// Course Module

//End Course Module


// Ecommerce Module
Route::prefix('admin/ecommerce/')->name('admin.')->group(function () {
//    Category Module

//    Brand Module

//    Size Modules

//    Product Module

//    Cart Module

//    Order Module

});
//End Ecommerce Module
