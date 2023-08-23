<?php


use App\Http\Controllers\Backend\Ecommerce\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AdminAuthController;
use App\Http\Controllers\Backend\Ecommerce\ProductCategoryController;
use App\Http\Controllers\Backend\Ecommerce\ProductBrandController;


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
    Route::get('categories', [ProductCategoryController::class, 'categories'])->name('categories');
    Route::get('category-all', [ProductCategoryController::class, 'allCategories'])->name('category.all');
    Route::get('get-category', [ProductCategoryController::class, 'getCategory'])->name('category.show');
    Route::post('category-store', [ProductCategoryController::class, 'store'])->name('category.store');

//    Brand Module
    Route::get('brands', [ProductBrandController::class, 'brands'])->name('brands');
    Route::get('brand-all', [ProductBrandController::class, 'allBrands'])->name('brands.all');
    Route::get('get-brand', [ProductBrandController::class, 'getBrand'])->name('brand.show');
    Route::post('brand-store', [ProductBrandController::class,'store'])->name('brand.store');
    Route::get('brand-edit', [ProductBrandController::class, 'edit'])->name('brand.edit');
    Route::post('brand-update', [ProductBrandController::class, 'update'])->name('brand.update');
    Route::get('brand-delete', [ProductBrandController::class, 'delete'])->name('brand.delete');


//    Product Module
    Route::get('products', [ProductController::class, 'products'])->name('products');
    Route::get('product-all', [ProductController::class, 'allProducts'])->name('products.all');
    Route::get('product-create', [ProductController::class, 'createView'])->name('product.create');




//    Size Modules

//    Product Module

//    Cart Module

//    Order Module

});
//End Ecommerce Module
