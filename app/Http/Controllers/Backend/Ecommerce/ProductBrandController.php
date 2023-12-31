<?php

namespace App\Http\Controllers\Backend\Ecommerce;

use App\Helpers\AdminHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductBrandAddRequest;
use App\Models\ProductBrand;
use Illuminate\Contracts\View\View;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
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
    public function allBrands(): JsonResponse
    {
        $brands = ProductBrand::select(['id', 'name', 'slogan', 'logo', 'status'])
            ->orderByDesc('id')
            ->get();

        return DataTables::of($brands)
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
            ->rawColumns(['logo', 'action'])
            ->make(true);
    }
    /**
     * Show  Product Brand
    **/
    public function getBrand(Request $request): JsonResponse
    {
        $brand = ProductBrand::select('id', 'name', 'slogan', 'logo', 'status')->find($request->id);

        return response()->json($brand);
    }
    /**
     * Store  Product Brand
    **/
    public function store(ProductBrandAddRequest $request): JsonResponse
    {
        try {
            DB::BeginTransaction();
            $storagePath = 'images/admin/brand';

            $request->merge([
                'slug' => Str::slug($request->name),
                'logo' => AdminHelper::getImageFilePath($request, $storagePath),
            ]);

            ProductBrand::create($request->all());
            DB::commit();

            return response()->json([
              'message' =>' Successfully created',
                'status'=> Response::HTTP_OK,
                'type'=> 'success'
            ],Response::HTTP_OK);

        } catch (QueryException $e) {
            DB::rollBack();
            return response()->json([
                'message' => $e->getMessage(),
                'status'=> Response::HTTP_INTERNAL_SERVER_ERROR,
                'type'=>'error'
            ]);
        }
    }
    /**
     * Brand Edit data get
    **/
    public function edit(Request $request): JsonResponse
    {
        try {
            $brand = ProductBrand::select('id', 'name', 'slogan', 'logo','status')->find($request->id);
            return response()->json([
                'message' => 'Data Found',
                'status' => Response::HTTP_OK,
                'type' => 'success',
                'brand' => $brand
            ], Response::HTTP_OK);

        } catch (QueryException $e) {
            return response()->json([
              'message' => $e->getMessage(),
              'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'type' => 'error',
            ]);
        }
    }

    /**
     * Update  Product Brand
    **/
    public function update(Request $request): JsonResponse
    {
            $request->validate([
            'name' => 'required|string|min:2|max:30',
            'slogan' => 'nullable|min:8|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        try {
            DB::beginTransaction();
            $brand = ProductBrand::find($request->id);
            if ($request->hasFile('image')) {
                $storagePath = 'images/admin/brand';
                $request->merge([
                    'logo' => AdminHelper::getImageFilePath($request, $storagePath),
                ]);
            }
            $brand->update($request->only('name', 'slogan', 'logo', 'status'));
            DB::commit();

            return response()->json([
              'message' => 'Successfully Updated',
              'status' => Response::HTTP_OK,
                'type' =>'success'
            ], Response::HTTP_OK);

        } catch (QueryException $e) {
            DB::rollBack();
            return response()->json([
              'message' => $e->getMessage(),
              'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'type' => 'error',
            ]);
        }
    }
    /**
     * Delete  Product Brand
    **/
    public function delete(Request $request): JsonResponse
    {
        try {
            DB::beginTransaction();
            $brand = ProductBrand::find($request->id);
            $brand->delete();
            DB::commit();

            return response()->json([
             'message' => 'Successfully Deleted',
             'status' => Response::HTTP_OK,
                'type' =>'success'
            ], Response::HTTP_OK);

        } catch (QueryException $e) {
            DB::rollBack();
            return response()->json([
             'message' => $e->getMessage(),
             'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'type' => 'error',
            ]);
        }
    }
}
