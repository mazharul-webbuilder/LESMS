<?php

namespace App\Http\Controllers\Backend\Ecommerce;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderDetailsResource;
use App\Models\Order;
use App\Models\Stock;
use Illuminate\Contracts\View\View;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class OrderController extends Controller
{
    public function orders(): View
    {
        return view('admin.ecommerce.order.orders');
    }

    /**
     * Get all orders
    */
    public function allOrders(): JsonResponse
    {
        $orders = Order::all();

        return DataTables::of($orders)
            ->addColumn('created_at', function ($order) {
//                return date('d-m-Y', strtotime($order->created_at));
                return Carbon::parse($order->created_at)->format('d-m-Y');
            })
            ->addColumn('name', function ($order) {
                 return $order->user->first_name . ' ' . $order->user->last_name;
            })
            ->addColumn('phone', function ($order) {
                return $order->user->phone;
            })
            ->addColumn('order_total', function ($order) {
                return currency() . ' ' . $order->grand_total;
            })
            ->addColumn('total_item', function ($order) {
                return '<div class="text-center">
                            <p>'.$order->total_item.'</p>
                        </div>';
            })
            /*Status Column*/
            ->addColumn('order_status', function ($order) {
                $statusOptions = [
                    'Pending', 'Processing', 'Shipping', 'Delivered', 'Decline'
                ];

                $statusSelect = '<select class="status-select form-control" style="background: #FFE5E5" data-id="' . $order->id . '">';

                foreach ($statusOptions as  $value) { // $value = array_key && $label = published or unpublished
                    $selected = $order->order_status == strtolower($value) ? 'selected' : '';
                    $statusSelect .= '<option value="' . $value . '" ' . $selected . '>' . $value . '</option>';
                }
                $statusSelect .= '</select>';

                return $statusSelect;
            })
            ->addColumn('action', function ($order) {
                return '
                <div class="text-center">
                    <button class="btn btn-primary details-btn" data-toggle="modal"
                     data-id="' . $order->id . '">Details</button>
                    <button class="btn btn-success invoice-btn" data-id="' . $order->id . '">Invoice</button>
                </div>
            ';
            })
            ->rawColumns(['created_at', 'name', 'phone', 'order_total', 'total_item','order_status','action'])
            ->make(true);
    }
    /**
     * Change ORder status
    */
    public function changeOrderStatus(Request $request): JsonResponse
    {
            $newStatus = strtolower($request->newStatus);
        try {
            DB::beginTransaction();
            $order = Order::find((int)$request->id);
            foreach ($order->orderDetails as $orderDetail) {
                if (!Stock::where('product_id', $orderDetail->product->id)->exists()) {
                    return \response()->json([
                        'status' => Response::HTTP_OK,
                        'message' => 'Before processing the order, add or adjust product to stock',
                        'type' => 'info',
                    ]);
                }
            }

            $order->order_status = $newStatus;
            $order->save();

            DB::commit();
            return response()->json([
                'status' => Response::HTTP_OK,
                'message' => 'Order Status Updated Successfully',
                'type' => 'success',
            ]);
        } catch ( QueryException $e ) {
            DB::rollBack();
            return response()->json([
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => $e->getMessage(),
                'type' => 'error',
            ]);
        }

    }

    /**
     *
    */
    public function details(Request $request): JsonResponse
    {
        try {
            $order = Order::find($request->orderId);


            return \response()->json([
                'status' => Response::HTTP_OK,
                'data' => new OrderDetailsResource($order),
//                'data' => new OrderDetailsResource($order),
            ]);
        } catch ( QueryException $e ) {
            return \response()->json([
               'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' => 'Something went wrong'
            ]);
        }
    }
}
