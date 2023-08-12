<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;


Route::prefix('admin/')->name('admin.')->group(function (){
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
});
