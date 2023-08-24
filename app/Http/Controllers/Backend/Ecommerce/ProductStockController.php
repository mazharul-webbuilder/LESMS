<?php

namespace App\Http\Controllers\Backend\Ecommerce;

use App\Http\Controllers\Controller;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
