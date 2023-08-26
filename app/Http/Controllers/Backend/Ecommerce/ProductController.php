<?php

namespace App\Http\Controllers\Backend\Ecommerce;

use App\Helpers\AdminHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductAddRequest;
use App\Models\Product;
use App\Models\Size;
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
            /*Thumbnail Image Column*/
            ->addColumn('thumbnail_image', function ($product) {
                return '<img src="'. asset('/') . $product->thumbnail_image . '" alt="' . $product->name . '" class="img-thumbnail" height="50px" width="50px">';
            })
            /*Stock Management Column*/
            ->addColumn('stock_management', function ($product) {
                return '
                     <div class="text-center">
                        <button class="btn stock-btn" style="background-color: #BEADFA" data-id="' . $product->id . '">Stock</button>
                    </div>
                ';
            })
            /*Status Column*/
            ->addColumn('status', function ($product) {
                $statusOptions = [
                    1 => 'Published',
                    0 => 'Unpublished',
                ];

                $statusSelect = '<select class="status-select form-control" style="background: #FFE5E5" data-id="' . $product->id . '">';
                foreach ($statusOptions as $value => $label) { // $value = array_key && $label = published or unpublished
                    $selected = $product->status == $value ? 'selected' : '';
                    $statusSelect .= '<option value="' . $value . '" ' . $selected . '>' . $label . '</option>';
                }
                $statusSelect .= '</select>';

                return $statusSelect;
            })
            /*Action Column*/
            ->addColumn('action', function ($product) {
                return '
                <div class="text-center">
                    <button class="btn btn-primary view-btn" data-id="' . $product->id . '">View</button>
                    <button class="btn btn-warning edit-btn" data-id="' . $product->id . '">Edit</button>
                    <button class="btn btn-danger delete-btn" data-id="' . $product->id . '">Delete</button>
                </div>
            ';
            })
            ->rawColumns(['thumbnail_image', 'action', 'stock_management', 'status'])
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

     /**
      * returns all sizes
     */
     public function allSizes(): JsonResponse
     {
         return \response()->json(Size::select(['id','name'])->get());
     }

     /**
      * Change Product current Status
      *
     */
     public function changeProductStatus(Request $request)
     {
         try {
             DB::beginTransaction();
             $product = Product::find($request->id);
             $product->status = $request->newStatus;
             $product->save();
             DB::commit();

             return response()->json([
                 'message' => 'Status Changed Successfully',
                 'status' => Response::HTTP_OK,
                 'type' => 'success',
             ], Response::HTTP_OK);
         } catch (QueryException $e) {
             DB::rollBack();

             return response()->json([
                'message' => $e->getMessage(),
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                 'type' => 'error',
             ], Response::HTTP_INTERNAL_SERVER_ERROR);

         }

     }
}
