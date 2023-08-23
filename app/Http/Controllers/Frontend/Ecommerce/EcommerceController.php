<?php

namespace App\Http\Controllers\Frontend\Ecommerce;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\View\View;

class EcommerceController extends Controller
{
    /**
     * View Ecommerce Products Page
     */
    public function index(): View
    {
        $products = Product::paginate(12);

        return view('frontend.ecommerce.product.products', compact('products'));
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

    /**
     * View Ecommerce Checkout Page
     */
    public function checkout(): View
    {
        return view('frontend.ecommerce.checkout.checkout');
    }

}
