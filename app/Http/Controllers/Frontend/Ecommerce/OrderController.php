<?php

namespace App\Http\Controllers\Frontend\Ecommerce;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderPlaceRequest;
use App\Models\Billing;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;
use App\Models\System;
use Illuminate\Contracts\View\View;
use Illuminate\Database\QueryException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Place New Order
    */
    public function placeOrder(OrderPlaceRequest $request)
    {
        $user = Auth::user();

        try {
            DB::beginTransaction();
            $order = new Order();
            $order->user_id = $user->id;
            $order->order_number = Order::getUniqueOrderNumber();
            $order->payment_id = Payment::$PAYMENT_METHOD_COD;
            $order->order_note = $request->order_note;
            $order->grand_total = getGrandTotal();
            $order->shipping_charges = System::$SHIPPING_CHARGE;
            $order->total_item = totalCart();
            $order->save();

            /*Insert Data into Order Details*/
            foreach (getCarts() as $cart) {
                $order_detail = new OrderDetail();
                $order_detail->order_id = $order->id;
                $order_detail->product_id = $cart->product_id;
                $order_detail->size_id = $cart->size_id;
                $order_detail->product_quantity = $cart->quantity;
                $order_detail->save();
            }

            /*Insert Data Into Billing*/
            $billing = new Billing();
            $billing->user_id = $user->id;
            $billing->order_id =  $order->id;
            $billing->name =  $request->first_name . ' ' . $request->last_name;
            $billing->phone =  $request->phone;
            $billing->address =  $request->address;
            $billing->email =  $request->email;
            $billing->zip_code =  $request->zip_code;
            $billing->save();

            foreach (getCarts() as $cart) {
                $cart = Cart::where('user_id', $user->id)->first();
                $cart->delete();
            }
            DB::commit();
            return \response()->json([
                'message' => 'Order Placed Successfully',
                'status' => Response::HTTP_OK,
                'type' => 'success',
            ]);
        } catch ( QueryException $e ) {
            DB::rollBack();
            return response()->json([
                'message' => $e->getMessage(),
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'type' => 'error'
            ]);
        }
    }

    /**
     * Order Placed
     * Congratulations page
    */
    public function orderSuccess():View
    {
        return \view('frontend.ecommerce.order.order-success');
    }

}
