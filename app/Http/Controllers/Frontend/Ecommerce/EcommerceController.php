<?php

namespace App\Http\Controllers\Frontend\Ecommerce;

use App\Http\Controllers\Controller;
use App\Models\BrandCategory;
use App\Models\Product;
use App\Models\ProductBrand;
use App\Models\ProductCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    /**
     * View Ecommerce Products Page
     */
    public function index(): View
    {
        $products = Product::latest()->paginate(12);

        return view('frontend.ecommerce.product.products', compact('products'));
    }

    /**
     * View Ecommerce Product Details Page
     */
    public function productDetails($slug, $usr_aft_code = null)
    {
        $product = Product::where('slug', $slug)->first();

        $related_products = Product::where('product_category_id', $product->product_category_id)
            ->take(8)
            ->get();

        $affiliate_link = url()->current(); // For Every Auth user, who is going to visit product details page

        return view('frontend.ecommerce.product.product-details', compact('product', 'related_products', 'affiliate_link'));
    }


    /**
     * View Ecommerce Checkout Page
     */
    public function checkout(): View
    {
        return view('frontend.ecommerce.checkout.checkout');
    }

    /**
     * Show product by Category
    */
    public function categoryWiseProduct($slug): View
    {
        $category = ProductCategory::where('slug', $slug)->first();

        $products = Product::where('product_category_id', $category->id)
            ->where('status', 1)
            ->paginate(12);


        return view('frontend.ecommerce.product.products', compact('products', 'category'));
    }

    /**
     * Show Product by Brand
    */
    public function BrandWiseProduct($slug): View
    {
        $brand = ProductBrand::where('slug', $slug)->first();

        $products = Product::where('product_brand_id', $brand->id)
            ->where('status', 1)
            ->paginate(12);

        $category = $brand->categories()->first();

        return view('frontend.ecommerce.product.products', compact('products', 'category'));

    }


}
