<?php

namespace App\Http\Controllers\Backend\Ecommerce;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProductCategoryController extends Controller
{
    /**
     * Show Admin Category Page to Manage Categories
    */
    public function categories(): View
    {
        return view('admin.ecommerce.category.categories');    // returns
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

}
