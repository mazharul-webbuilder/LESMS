<?php

namespace App\Http\Controllers\Frontend\Ecommerce;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Contracts\View\View;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * View Ecommerce Cart Page
     */
    public function cart(): View
    {
        return view('frontend.ecommerce.cart.cart');
    }
    /**
     * Add to cart by auth user or by user request ip
    */
    public function addToCart(Request $request): JsonResponse
    {
        $request->validate([
            "size_id" => "nullable|integer",
            "product_id" => "required|integer",
            "quantity" => "required|min:1",
        ]);

        try {
            DB::beginTransaction();
            if (Auth::check()) {
                $userId = Auth::user()->id;
                if (Cart::where('product_id', $request->product_id)->where('user_id', $userId)->exists()) {
                    $cart = Cart::where('user_id', $userId)->where('product_id', $request->product_id)->first();
                    $cart->quantity += $request->quantity;
                    $cart->save();
                    DB::commit();
                    return \response()->json([
                        'message' => 'Added to Cart & Adjust Quantity',
                        'status' => Response::HTTP_OK,
                        'type' => 'success',
                        'cartCount' => totalCart(),
                        'get_cart_list'=>$this->get_cart_list()
                    ]);
                }
                $request->merge([
                    'user_id' => $userId,
                ]);
                Cart::create($request->all());
                DB::commit();
                return \response()->json([
                    'message' => 'Added to Cart & Adjust Quantity',
                    'status' => Response::HTTP_OK,
                    'type' => 'success',
                    'cartCount' => totalCart(),
                    'get_cart_list'=>$this->get_cart_list()
                ]);
            } else {
                if (Cart::where('product_id', $request->product_id)->where('user_ip', $request->ip())->exists()) {
                    $cart = Cart::where('user_ip', $request->ip())->where('product_id', $request->product_id)->first();
                    $cart->quantity += $request->quantity;
                    $cart->save();
                    DB::commit();
                    return \response()->json([
                        'message' => 'Added to Cart & Adjust Quantity',
                        'status' => Response::HTTP_OK,
                        'type' => 'success',
                        'cartCount' => totalCart(),
                        'get_cart_list'=>$this->get_cart_list()
                    ]);
                }
                $request->merge([
                    'user_ip' => $request->ip()
                ]);
                Cart::create($request->all());
                DB::commit();
                return \response()->json([
                    'message' => 'Added to Cart & Adjust Quantity',
                    'status' => Response::HTTP_OK,
                    'type' => 'success',
                    'cartCount' => totalCart(),
                    'get_cart_list'=>$this->get_cart_list()
                ]);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => $e->getMessage(),
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'type' => 'error'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * user remove item from cart request
    */
    public function cartRemove(Request $request)
    {
        try {
            $cart = Cart::find($request->cartId);
            $cart->delete();
            return response()->json([
                'message' => 'Product deleted from cart successfully',
                'status' => Response::HTTP_OK,
                'type' => 'success',
                'cartCount' => totalCart(),
                'get_cart_list'=>$this->get_cart_list()
            ]);
        } catch ( QueryException $e ) {
            return \response()->json([
                'message' => $e->getMessage(),
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'type' => 'error'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    /**
     * cart remove from carts page
     */
    public function cartTrash(Request $request)
    {
        try {
            $cart = Cart::find($request->id);
            $cart->delete();
            return response()->json([
                'status' => Response::HTTP_OK,
                'type' => 'success',
                'cartCount' => totalCart(),
                'cartTotal' => currency() . ' : ' . getCartTotalPrice(),
                'get_cart_list'=>$this->get_cart_list(),
                'get_cart_large_list' => $this->getCartListForCartPage(),
                'flag' => totalCart() > 0 ? 1 : 0,
                'no_cart' => $this->noCart()
            ]);
        } catch ( QueryException $e ) {
            return \response()->json([
                'message' => $e->getMessage(),
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'type' => 'error'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    /**
     * Adjust Cart Product
    */
    public function adjustCartQuantity(Request $request)
    {
        $cart = Cart::findOrFail($request->cartId);

        if ($request->flag == 0 && $cart->quantity > 1) {
            $cart->decrement('quantity');
        } elseif ($request->flag == 1) {
            $cart->increment('quantity');
        }
        return \response()->json([
            'status' => Response::HTTP_OK,
            'type' => 'success',
            'cartCount' => totalCart(),
            'cartTotal' => currency() . ' : ' . getCartTotalPrice(),
            'get_cart_list'=>$this->get_cart_list(),
            'get_cart_large_list' => $this->getCartListForCartPage()
        ]);
    }



    public function get_cart_list(){

        $carts=getCarts();
        $set_item='';
        if (totalCart()>0) {
            foreach ($carts as $cart) {
                $set_item .= '<div class="header__right__dropdown__inner">
                <div class="single__header__right__dropdown">

                    <div class="header__right__dropdown__img">
                        <a href="' . route('ecommerce.productDetails', ['slug' => $cart->product->slug]) . '">
                            <img src="' . asset("images/admin/product/small" . "/" . $cart->product->thumbnail_image) . '" alt="' . $cart->product->name . '">
                        </a>
                    </div>
                    <div class="header__right__dropdown__content">
                        <a href="' . route('ecommerce.productDetails', ['slug' => $cart->product->slug]) . '">' . $cart->product->name . '</a>
                        <p>' . $cart->quantity . 'x' . '<span class="price">' . $cart->product->current_price . '</span></p>
                    </div>
                    <div class="header__right__dropdown__close">
                        <a href="javascript:void(0)" ><i class="icofont-close-line cartCloseBtn " data-id="' .$cart->id.'" class=""></i></a>
                    </div>
                </div>
             </div>';
            }

            $set_item .= '<p class="dropdown__price">Total Including Tax: <span>' . currency(). ' ' .number_format(getCartTotalPrice()) . '</span>
                        </p>
                        <div class="header__right__dropdown__button">
                            <a href="'. route('ecommerce.cart') .'" class="white__color">VIEW
                                CART</a>

                  </div>';
        }else{
            $set_item.='<h6>Empty Cart<h4>';
        }



        return $set_item;


    }

    /**
     * Get cart list for cartPage
    */
    public function getCartListForCartPage()
    {
        $carts = getCarts();
        $set_item = '';

        if (totalCart() > 0) {
            foreach ($carts as $cart) {
                $set_item .= '
                        <tr>
                            <td class="cartarea__product__thumbnail">
                                <a href="'. route('ecommerce.productDetails', ['slug' => $cart->product->slug]) . '">
                                    <img src="' . asset("images/admin/product/small" . "/" . $cart->product->thumbnail_image) . '" alt="product-1">
                                </a>
                            </td>
                            <td class="cartarea__product__name"><a href="'. route('ecommerce.productDetails', ['slug' => $cart->product->slug]) . '">' . $cart->product->name . ' </a></td>
                            <td class="cartarea__product__price__cart"><span class="amount">' . currency() . ' : ' . $cart->product->current_price . '</span></td>
                            <td class="cartarea__product__quantity">
                                <div class="cartarea__plus__minus">
                                    <div class="dec qtybutton" data-id="' . $cart->id  . '">- </div>
                                    <input class="cart-quantity-box" disabled type="text" value="' . $cart->quantity . '"
                                           name="updates[]">
                                    <div class="inc qtybutton" data-id="' .$cart->id . '">+</div>
                                </div>
                            </td>
                            <td class="cartarea__product__subtotal">' . currency() . ' : ' . $cart->product->current_price * $cart->quantity. '</td>
                            <td class="cartarea__product__remove">
                                <a  href="javascript:void(0)" class="TrashCartItem" data-id="' . $cart->id . '">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Trash</title><path d="M112 112l20 320c.95 18.49 14.4 32 32 32h184c17.67 0 30.87-13.51 32-32l20-320" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 112h352"/><path d="M192 112V72h0a23.93 23.93 0 0124-24h80a23.93 23.93 0 0124 24h0v40M256 176v224M184 176l8 224M328 176l-8 224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg></a>
                            </td>
                        </tr>';
            }
            return $set_item;
        } else {
            $set_item.='<h4 class="text-center">Empty Cart<h4>';
        }

    }

    /**
     * REturn No cart html
    */
    public function noCart()
    {
        return '<div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 text-center">
                        <div class="display-4">Your Cart</div>
                        <p class="lead">Your cart is currently empty.</p>
                        <a href="#" class="btn btn-primary">Continue Shopping</a>
                    </div>
                </div>
            </div>';
    }
}
