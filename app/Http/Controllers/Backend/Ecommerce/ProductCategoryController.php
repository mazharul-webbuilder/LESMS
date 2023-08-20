<?php

namespace App\Http\Controllers\Backend\Ecommerce;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Contracts\View\View;
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
            ->addColumn('action', function ($category) {
                return '
                <button class="btn btn-primary view-btn" data-id="' . $category->id . '">View</button>
                <button class="btn btn-warning edit-btn" data-id="' . $category->id . '">Edit</button>
                <button class="btn btn-danger delete-btn" data-id="' . $category->id . '">Delete</button>
            ';
            })
            ->make(true);
    }
}
