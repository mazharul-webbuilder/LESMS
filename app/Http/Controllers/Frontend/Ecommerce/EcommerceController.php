<?php

namespace App\Http\Controllers\Frontend\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class EcommerceController extends Controller
{
    /**
     * View Ecommerce Products Page
     */
    public function index(): View
    {
        return view('frontend.ecommerce.product.products');
    }

    /**
     * View Ecommerce Product Details Page
     */
    public function productDetails(): View
    {
        return view('frontend.ecommerce.product.product-details');
    }

    /**
     * View Ecommerce Cart Page
     */
    public function cart(): View
    {
        return view('frontend.ecommerce.cart.cart');
    }

}
