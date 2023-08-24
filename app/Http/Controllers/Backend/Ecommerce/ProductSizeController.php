<?php

namespace App\Http\Controllers\Backend\Ecommerce;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Js;
use Yajra\DataTables\DataTables;


class ProductSizeController extends Controller
{
    /**
     * Show Product Sizes page
    */
    public function sizes(): View
    {
        return view('admin.ecommerce.size.sizes');
    }

    /**
     * return Product sizes
    */
    public function allSizes(): JsonResponse
    {
        $brands = Size::select(['id', 'name'])
            ->orderByDesc('id')
            ->get();

        return DataTables::of($brands)
            ->addColumn('action', function ($brand) {
                return '
                <div class="text-center">
                    <button class="btn btn-warning edit-btn" data-id="' . $brand->id . '">Edit</button>
                    <button class="btn btn-danger delete-btn" data-id="' . $brand->id . '">Delete</button>
                </div>
            ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required|unique:sizes,name'
        ]);

        try {
            DB::beginTransaction();

            $size = new Size();
            $size->name = $request->name;
            $size->save();

            DB::commit();

            return response()->json([
              'status' => Response::HTTP_OK,
              'message' => 'Size added successfully',
                'type' => 'success'
            ], Response::HTTP_OK);

        } catch ( QueryException $e) {
            DB::rollBack();
            return response()->json([
              'message' => $e->getMessage(),
              'success' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'type' => 'error'
            ], Response::HTTP_BAD_REQUEST);
        }
    }
}
