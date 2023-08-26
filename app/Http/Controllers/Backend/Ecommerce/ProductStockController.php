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
    public function getStocks(Request $request) : JsonResponse
    {
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
                    <button class="btn btn-warning stock-edit-btn" data-id="' . $stock->id . '">Edit</button>
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
    public function storeOrUpdate(Request $request): JsonResponse
        {
            $request->validate([
            'product_id' => 'required',
            'size_id' => 'required',
            'quantity' => 'required',
        ]);
        /* Check where it is store or update request */
        $stockId = (int) $request->stock_id;
        if ($stockId) {
            $stock = Stock::find($stockId);
        } else {
            $stock = new Stock();
        }

        try {
            DB::beginTransaction();
            // Update or create the stock record
            $stock->fill($request->all());
            $stock->save();
            DB::commit();

            return response()->json([
                'status' => Response::HTTP_OK,
              'type' => 'success',
              'message' => $stockId ? 'Stock updated successfully' : 'Stock Added successfully'
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
     * Get stock data to Edit
    */
    public function edit(Request $request): JsonResponse
    {
        $stockId = (int) $request->id;

        $stock = Stock::where('id', $stockId)
            ->with('size')
            ->first();

        return response()->json($stock, Response::HTTP_OK);
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
