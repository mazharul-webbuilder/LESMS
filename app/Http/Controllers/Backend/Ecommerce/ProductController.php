<?php

namespace App\Http\Controllers\Backend\Ecommerce;

use App\Helpers\AdminHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductAddRequest;
use App\Models\Product;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
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
            ->addColumn('stock_management', function ($product) {
                return '
                <button class="btn stock-btn" style="background-color: #BEADFA" data-id="' . $product->id . '">Stock</button>
                ';
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
            ->rawColumns(['thumbnail_image', 'action', 'stock_management'])
            ->make(true);

    }

     /**
     * Show Product Create Page
    */
     public function createView(): View
     {
         return \view('admin.ecommerce.product.create');
     }

    /**
     * Store Product
     */
     public function store(ProductAddRequest $request): JsonResponse
     {
         try {
             DB::beginTransaction();
             $storagePath = 'images/admin/product';

             $request->merge([
                 'slug' => Str::slug($request->name),
                 'product_code' => AdminHelper::generateUniqueCode(),
                 'thumbnail_image' => AdminHelper::getImageFilePath($request,$storagePath),
             ]);

             Product::create($request->all());

             DB::commit();
             return response()->json([
               'message' => 'Product Added Successfully',
               'status' => Response::HTTP_OK,
                'type' => 'success'
             ]);

         } catch ( QueryException $e) {
             DB::rollBack();
             return response()->json([
               'message' => $e->getMessage(),
               'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
               'type' => 'error'
             ]);
         }
     }
}
