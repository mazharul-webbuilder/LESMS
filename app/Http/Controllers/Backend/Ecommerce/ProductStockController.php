<?php

namespace App\Http\Controllers\Backend\Ecommerce;

use App\Http\Controllers\Controller;
use App\Models\Stock;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class ProductStockController extends Controller
{
    /**
     * Return all stocks by product
    */
    public function getStocks(Request $request) {
        $productId = (int) $request->productId;

        $stocks = Stock::where('product_id', $productId)
            ->with('size') // Eager load the size relationship
            ->get();

        return DataTables::of($stocks)
            ->addColumn('size_name', function ($stock) {
                return $stock->size->name; // Access the size_name through the relationship
            })
            ->addColumn('action', function ($stock) {
                return '
                <div class="text-center">
                    <button class="btn btn-danger stock-delete-btn" data-id="' . $stock->id . '">Delete</button>
                </div>
            ';
            })
            ->rawColumns(['action', 'size_name'])
            ->make(true);
    }

    /**
     * Store Stock
    */
    public function store(Request $request): JsonResponse
        {
            $request->validate([
            'product_id' => 'required',
            'size_id' => 'required',
            'quantity' => 'required',
        ]);
        try {
            DB::beginTransaction();
            Stock::create($request->all());
            DB::commit();

            return response()->json([
                'status' => Response::HTTP_OK,
              'type' => 'success',
              'message' => 'Stock added successfully'
            ], Response::HTTP_OK);

        } catch ( QueryException $e ) {
            DB::rollBack();
            return response()->json([
              'staus' => Response::HTTP_INTERNAL_SERVER_ERROR,
              'type' => 'error',
              'message' => $e->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Delete a stock
    */
    public function delete(Request $request)
    {
        $stockId = (int) $request->id;

        $stock = Stock::find($stockId);
        $stock->delete();

        return response()->json([
            'message' => 'Stock deleted successfully',
            'status' => Response::HTTP_OK,
            'type' => 'success',
        ]);
    }

}
