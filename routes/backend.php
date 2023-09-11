<?php


use App\Http\Controllers\Backend\Ecommerce\InvoiceController;
use App\Http\Controllers\Backend\Ecommerce\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AdminAuthController;
use App\Http\Controllers\Backend\Ecommerce\ProductCategoryController;
use App\Http\Controllers\Backend\Ecommerce\ProductBrandController;
use App\Http\Controllers\Backend\Ecommerce\ProductSizeController;
use App\Http\Controllers\Backend\Ecommerce\ProductStockController;
use App\Http\Controllers\Backend\Ecommerce\OrderController;
use App\Http\Controllers\Backend\Ecommerce\AffiliateController;



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
    Route::post('product-store', [ProductController::class,'store'])->name('product.store');
    Route::get('product-delete', [ProductController::class,'delete'])->name('product.delete');
    Route::get('product-edit/{id}', [ProductController::class,'edit'])->name('product.edit');
    Route::post('product-update', [ProductController::class,'update'])->name('product.update');
    Route::get('all-sizes', [ProductController::class,'allSizes'])->name('product.all.sizes');
    Route::get('change-product-status', [ProductController::class,'changeProductStatus'])->name('product.status'); // Change ProductStatus

//    Size Modules
    Route::get('sizes', [ProductSizeController::class, 'sizes'])->name('sizes');
    Route::get('sizes-all', [ProductSizeController::class, 'allSizes'])->name('sizes.all');
    Route::post('size-store', [ProductSizeController::class, 'store'])->name('size.store');
    Route::get('size-edit', [ProductSizeController::class, 'edit'])->name('size.edit');
    Route::post('size-update', [ProductSizeController::class, 'update'])->name('size.update');
    Route::get('size-delete', [ProductSizeController::class, 'delete'])->name('size.delete');

//    Stock Module
    Route::get('get-all-stock', [ProductStockController::class, 'getStocks'])->name('stock.all');
    Route::post('stock-store', [ProductStockController::class, 'storeOrUpdate'])->name('stock.store');
    Route::get('stock-edit', [ProductStockController::class, 'edit'])->name('stock.edit');
    Route::get('stock-delete', [ProductStockController::class, 'delete'])->name('stock.delete');

//    Product Affiliate Setting
    Route::get('get-product-affiliate-info', [AffiliateController::class, 'getProductAffiliateInfo'])->name('product.affiliate.show');
    Route::post('store/affiliate/setting', [AffiliateController::class, 'storeAffiliateSetting'])->name('affiliate.setting.store');
//    Product Additional Setting
    Route::get('product/additional-setting', [ProductController::class, 'additionSettingStatus'])->name('additional.setting.status');
//    Cart Module

//    Order Module
    Route::get('order/manage', [OrderController::class, 'orders'])->name('orders');
    Route::get('all/orders', [OrderController::class, 'allOrders'])->name('orders.all');
    Route::get('change/order/status', [OrderController::class, 'changeOrderStatus'])->name('order.status');
    Route::get('order/details', [OrderController::class, 'details'])->name('order.details');
//    Invoice Module
    Route::get('order/invoice/{id}', [InvoiceController::class, 'invoice'])->name('order.invoice');

});
//End Ecommerce Module
