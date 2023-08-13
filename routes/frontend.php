<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserAuthController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/register', [UserAuthController::class, 'register'])->name('register');
Route::post('/register', [UserAuthController::class, 'registerPost'])->name('register.post');
Route::get('/login', [UserAuthController::class, 'login'])->name('login');
Route::post('/login', [UserAuthController::class, 'authenticate'])->name('login.post');
Route::get('/logout', [UserAuthController::class, 'logout'])->name('logout');

