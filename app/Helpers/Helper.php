<?php

use App\Models\Product;
use App\Models\Size;
use App\Models\Stock;
use App\Models\Cart;
use App\Models\System;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Wishlist;

function sizes()
{
    return Size::latest()->get();
}

function brands()
{

}

function getProductStock($productId)
{
    $stocks =  Stock::where('product_id', $productId)->get();

    $totalStock = 0;

    foreach ($stocks as $stock)
    {
        $totalStock += $stock->quantity;
    }

    return $totalStock;
}

function getProductSizes($productId)
{
    $sizes = Stock::where('product_id', $productId)
        ->whereNotNull('size_id')
        ->with('size') // Eager load the size relationship
        ->get();

    $sizeData = $sizes->pluck('size.name', 'size.id');

    return $sizeData;
}

function totalCart()
{
    return Cart::totalItem();
}

/**
 * returns all cart product op user
 * by auth user or userip
*/
function getCarts()
{
    return Cart::carts();
}



/**
 * returns all cart product op user
 * by auth user or userip
 */
function getCartTotalPrice()
{
    return Cart::getCartTotalPrice();
}

function price_format($price){
    return number_format($price,2);
}
function currency(){
    return "BDT";
}

function getShippingCharge()
{
    return System::$SHIPPING_CHARGE;
}

function getGrandTotal()
{
    return getCartTotalPrice() + System::$SHIPPING_CHARGE;
}

function totalOrder()
{
    return Order::count();
}

function todayTotalOrders()
{
    return Order::whereDate('created_at', Carbon::today())->count();
}

function getTodaySell()
{
    return  Order::whereDate('created_at', Carbon::today())->get()->sum('grand_total');

}

function getTotalOrderByMonth()
{
    return Order::whereMonth('created_at', Carbon::now()->month)->count();
}

function getTotalSellByCurrentMonth()
{
    return Order::whereMonth('created_at', Carbon::now()->month)->get()->sum('grand_total');
}

function getTotalOrderByYear()
{
    return Order::whereYear('created_at', Carbon::now()->year)->count();
}

function getTotalSellByCurrentYear()
{
    return Order::whereYear('created_at', Carbon::now()->year)->get()->sum('grand_total');
}

function getUserByParentReferralCode($parentReferralCode)
{
    return User::where('own_referral_code', $parentReferralCode)->first()->id;

}

function getNumberOfBrandProductByCategory($brand, $categoryId)
{
    $brandProduct = $brand->products
        ->where('product_category_id', $categoryId)
        ->count();

    return $brandProduct;
}

function isAuthenticUser()
{
    return Auth::check();
}

function getNumberOfItemInWishlist() {
    return Wishlist::getNumberOfItemInWishlist();
}

function getWishlist()
{
    return Wishlist::getWishlist();
}

function getUserReferralAsAffiliateKey()
{
    if (isAuthenticUser()) {
        return Auth::user()->own_referral_code;
    }
}

function check_size($stcok=[])
{
    $tide = false;
    foreach ($stcok as $data){
        if ($data->size_id!=null){
            $tide = true;
        }
        break;
    }
    return $tide;
}
