<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AdminAuthController;

// Admin Auth Request
Route::get('admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'authenticate'])->name('admin.login.post');
Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Admin Authorized Requests
Route::prefix('admin/')->name('admin.')->group(function (){
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});
