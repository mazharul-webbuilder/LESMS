<?php

namespace App\Http\Controllers\Backend\Ecommerce;

use App\Helpers\AdminHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCategoryAddRequest;
use App\Models\BrandCategory;
use App\Models\ProductCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class ProductCategoryController extends Controller
{
    /**
     * Show Admin Category Page to Manage Categories
     */
    public function categories(): View
    {
        return view('admin.ecommerce.category.categories');
    }

    /**
     * Return all categories to show in Yajra Datatables
     */
    public function allCategories()
    {
        $categories = ProductCategory::select(['id', 'name', 'title', 'image', 'status']);

        return DataTables::of($categories)
            ->addColumn('image', function ($category) {
                return '<img src="'. asset('/') . $category->image . '" alt="' . $category->name . '" class="img-thumbnail" height="50px" width="50px">';
            })
            ->addColumn('action', function ($category) {
                return '
                <div class="text-center">
                    <button class="btn btn-primary view-btn" data-id="' . $category->id . '">View</button>
                    <button class="btn btn-warning edit-btn" data-id="' . $category->id . '">Edit</button>
                    <button class="btn btn-danger delete-btn" data-id="' . $category->id . '">Delete</button>
                </div>
            ';
            })
            ->rawColumns(['image', 'action'])
            ->make(true);
    }

    /**
     * Show Admin Category Page to Manage Categories
     */
    public function getCategory(Request $request)
    {
        $category = ProductCategory::select('id', 'name', 'title', 'image', 'status')->find($request->id);

        return response()->json($category);
    }
    /**
     * Store New Category
     */
    public function store(ProductCategoryAddRequest $request)
    {
        try {
            DB::beginTransaction();
            $storagePath = 'images/admin/category';

            $request->merge([
                'slug' => Str::slug($request->name),
                'image' => AdminHelper::getImageFilePath($request, $storagePath)
            ]);

            $category = ProductCategory::create($request->all());

            $categoryBrandsIds = $request->brands;   // Category Brands

//          Insert Data Into BrandCategory Table
            if ($categoryBrandsIds) {
                foreach ($categoryBrandsIds as $brandId) {
                    $brandCategory = new BrandCategory();
                    $brandCategory->product_brand_id = $brandId;
                    $brandCategory->product_category_id = $category->id;
                    $brandCategory->save();
                }
            }
            DB::commit();

            return response()->json([
                'message' => 'Category Added Successfully',
                'status' => Response::HTTP_OK,
                'type' => 'success'
            ]);
        } catch ( QueryException $e ) {
            DB::rollBack();
            return response()->json([
                'message' => $e->getMessage(),
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'type' => 'error'
            ]);
        }
    }

}
