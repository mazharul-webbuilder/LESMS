<?php

namespace App\Http\Controllers\Frontend\Ecommerce;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
    /**
     * Add to wishlist
    */
    public function addToWishlist(Request $request): JsonResponse
    {
        try {
            DB::beginTransaction();
            if (isAuthenticUser()) {
                if (Wishlist::where('product_id', $request->id)->where('user_id', Auth::id())->exists()) {
                    return \response()->json([
                        'status' => Response::HTTP_OK,
                        'message' => 'Already added in wishlist',
                        'type' => 'success',
                        'totalCount' => getNumberOfItemInWishlist(),
                        'get_wishlist' => $this->generateWishlistHTML()
                    ]);
                }
                $request->merge(['user_id' => Auth::user()->id]);
            } else {
                if (Wishlist::where('product_id', $request->id)->where('user_ip', $request->ip())->exists()) {
                    return \response()->json([
                        'status' => Response::HTTP_OK,
                        'message' => 'Already added in wishlist',
                        'type' => 'success',
                        'totalCount' => getNumberOfItemInWishlist(),
                        'get_wishlist' => $this->generateWishlistHTML()
                    ]);
                }
                $request->merge(['user_ip' => $request->ip()]);
            }
            $request->merge(['product_id' => $request->id, 'quantity' => 1]);

            Wishlist::create($request->all());

            DB::commit();

            return \response()->json([
                'status' => Response::HTTP_OK,
                'message' => 'Add to Wishlist',
                'type' => 'success',
                'totalCount' => getNumberOfItemInWishlist(),
                'get_wishlist' => $this->generateWishlistHTML()
            ]);
        } catch (QueryException $e) {
            DB::rollBack();
            return response()->json([
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
                'type' => 'error'
            ]);
        }

    }

    /**
     * Remove a product from wishlist
    */
    public function wishlistRemove(Request $request)
    {
        try {
            DB::beginTransaction();
            $wishlist = Wishlist::find($request->id);
            $wishlist->delete();
            DB::commit();
            return \response()->json([
                'type' => 'success',
                'status' => Response::HTTP_OK,
                'message' => 'Product Successfully Remove',
                'totalCount' => getNumberOfItemInWishlist(),
                'get_wishlist' => $this->generateWishlistHTML()
            ]);
        } catch (QueryException $e) {
            DB::rollBack();
            return \response()->json([
                'type' => 'error',
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage()
            ]);
        }
    }

    private function generateWishlistHTML()
    {
        $wishlistHTML = '';

        $wishlistItems = getWishlist();
        $itemCount = getNumberOfItemInWishlist();

        if ($itemCount > 0) {
            foreach ($wishlistItems as $item) {
                $wishlistHTML .= '<div class="header__right__dropdown__inner">
                                <div class="single__header__right__dropdown">
                                    <div class="header__right__dropdown__img">
                                        <a href="' . route('ecommerce.productDetails', ['slug' => $item->product->slug]) . '">
                                            <img src="' . asset("images/admin/product/small/{$item->product->thumbnail_image}") . '" alt="' . $item->product->name . '">
                                        </a>
                                    </div>
                                    <div class="header__right__dropdown__content">
                                        <a href="' . route('ecommerce.productDetails', ['slug' => $item->product->slug]) . '">' . $item->product->name . '</a>
                                        <p>' . $item->quantity . ' x <span class="price">' . $item->product->current_price . ' Tk</span></p>
                                    </div>
                                    <div class="header__right__dropdown__close">
                                        <a href="javascript:void(0)"><i class="icofont-close-line wishlistCloseBtn" data-id="' . $item->id . '"></i></a>
                                    </div>
                                </div>
                            </div>';
            }

            return $wishlistHTML;
        } else {
            return '<h6>Empty Wishlist</h6>';
        }
    }

}
