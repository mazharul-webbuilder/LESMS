<?php

namespace App\Http\Controllers\Backend\Ecommerce;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class AffiliateController extends Controller
{
    /**
     * Will return product affiliate information
    */
    public function getProductAffiliateInfo(Request $request): JsonResponse
    {
        $product = Product::select('affiliate_commission_type', 'affiliate_commission')->find($request->id);

        return response()->json($product);
    }

    /**
     * Store Affiliate Setting
     */
    public function storeAffiliateSetting(Request $request)
    {
        $request->validate([
           'product_id' => 'required|integer|exists:products,id',
            'affiliate_commission_type' => 'required|in:flat,percent',
            'affiliate_commission' => 'required|numeric'
        ]);
        if ($request->affiliate_commission_type === 'percent' && $request->affiliate_commission > 100) {
//            abort(422, 'The affiliate commission percentage cannot be greater than 100.');
            return \response()->json([
                'status' => Response::HTTP_OK,
                'message' => 'The affiliate commission percentage cannot be greater than 100 Percent.',
                'type' => 'warning'
            ]);
        }

        $product = Product::find($request->product_id);
        try {
            DB::beginTransaction();
            $product->update($request->all());
            DB::commit();
            return \response()->json([
                'status' => Response::HTTP_OK,
                'message' => 'Affiliate Setting Successfully',
                'type' => 'success'
            ]);
        } catch (QueryException $exception) {
            DB::rollBack();
            return \response()->json([
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $exception->getMessage(),
                'type' => 'error'
            ]);
        }
    }
}
