<?php

namespace App\Http\Controllers\Backend\Ecommerce;

use App\Http\Controllers\Controller;
use App\Models\ProductBrand;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProductBrandController extends Controller
{
    /**
     * Show Product Brands Manage Page
    **/
    public function brands(): View
    {
        return view('admin.ecommerce.brand.brands');
    }

    /**
     * Return All Product Brands
     * Using Yajra Package
    **/
    public function allbrands()
    {
        $brands = ProductBrand::select(['id', 'name', 'slogan', 'logo', 'status'])
            ->orderByDesc('id')
            ->get();

        return DataTables::of($brands)
            ->addColumn('serial', '')
            ->addColumn('logo', function ($brand) {
                return '<img src="'. asset('/') . $brand->logo . '" alt="' . $brand->name . '" class="img-thumbnail" height="50px" width="50px">';
            })
            ->addColumn('action', function ($brand) {
                return '
                <div class="text-center">
                    <button class="btn btn-primary view-btn" data-id="' . $brand->id . '">View</button>
                    <button class="btn btn-warning edit-btn" data-id="' . $brand->id . '">Edit</button>
                    <button class="btn btn-danger delete-btn" data-id="' . $brand->id . '">Delete</button>
                </div>
            ';
            })
            ->rawColumns(['logo', 'action', 'serial'])
            ->make(true);
    }
    /**
     * Show  Product Brand
    **/
    public function getBrand(Request $request)
    {
        $brand = ProductBrand::select('id', 'name', 'slogan', 'logo', 'status')->find($request->id);

        return response()->json($brand);
    }
}
