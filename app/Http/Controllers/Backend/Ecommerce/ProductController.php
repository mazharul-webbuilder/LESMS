<?php

namespace App\Http\Controllers\Backend\Ecommerce;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Yajra\DataTables\DataTables;

class ProductController extends Controller
{
    /**
     * Show Products Page
    */
    public function products(): View
    {
        return view('admin.ecommerce.product.products');
    }

    /**
     * Get all products
    */
    public function allProducts(): JsonResponse
    {
        $products = Product::all();

        return DataTables::of($products)
            ->addColumn('thumbnail_image', function ($product) {
                return '<img src="'. asset('/') . $product->thumbnail_image . '" alt="' . $product->name . '" class="img-thumbnail" height="50px" width="50px">';
            })
            ->addColumn('action', function ($product) {
                return '
                <div class="text-center">
                    <button class="btn btn-primary view-btn" data-id="' . $product->id . '">View</button>
                    <button class="btn btn-warning edit-btn" data-id="' . $product->id . '">Edit</button>
                    <button class="btn btn-danger delete-btn" data-id="' . $product->id . '">Delete</button>
                </div>
            ';
            })
            ->rawColumns(['thumbnail_image', 'action'])
            ->make(true);

    }

     /**
     * Show Product Create Page
    */
     public function createView(): View
     {
         return \view('admin.ecommerce.product.create');
     }
}
