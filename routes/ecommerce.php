<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Ecommerce\EcommerceController;
use App\Http\Controllers\Frontend\Ecommerce\CartController;
use App\Http\Controllers\Frontend\Ecommerce\CheckoutController;
use App\Http\Controllers\Frontend\Ecommerce\OrderController;
use App\Http\Controllers\Frontend\Ecommerce\WishlistController;



Route::get('/products', [EcommerceController::class, 'index'])->name('ecommerce.products');

/*Category Wise Product*/
Route::name('ecommerce.')->group(function (){
    /*Products*/
    Route::get('/category/{slug}', [EcommerceController::class, 'categoryWiseProduct'])->name('categoryWiseProduct');
    Route::get('/brand/{slug}', [EcommerceController::class, 'BrandWiseProduct'])->name('BrandWiseProduct');
    Route::get('/product/details/{slug}/{usr_aft_code?}', [EcommerceController::class, 'productDetails'])->name('productDetails');
    /*Wishlist*/
    Route::get('/add/to/wishlist', [WishlistController::class, 'addToWishlist'])->name('addToWishlist');
    Route::get('/wishlist/remove', [WishlistController::class, 'wishlistRemove'])->name('wishlist.remove');
    /*Cart*/
    Route::post('/product/add/to/cart', [CartController::class, 'addToCart'])->name('addToCart');
    Route::get('/product/remove/to/cart', [CartController::class, 'cartRemove'])->name('cart.remove');
    Route::get('/carts', [CartController::class, 'cart'])->name('cart');
    Route::get('/adjust/cart/quantity', [CartController::class, 'adjustCartQuantity'])->name('cart.quantity.adjust');
    Route::get('/cart/trash', [CartController::class, 'cartTrash'])->name('cart.trash');
    /*Checkout*/
    Route::get('/cart/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
    /*Order*/
    Route::post('/order/order', [OrderController::class, 'placeOrder'])->name('placeOrder');
    Route::get('/congratulation/order-successfully/places', [OrderController::class, 'orderSuccess'])->name('orderSuccess')->middleware('auth');

});

