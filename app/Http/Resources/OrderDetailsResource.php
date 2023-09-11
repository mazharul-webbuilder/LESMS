<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderDetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'order_number' => $this->order_number,
            'order_date' => Carbon::parse($this->created_at)->format('d-m-Y'),
            'shipping_address' => $this->billing->address,
            'payment_status' => strtoupper($this->payment_status),
            'order_status' => strtoupper($this->order_status),
            'grand_total' => $this->grand_total,
            'customer' => [
                'name' => $this->user->full_name,
                'email' => $this->user->email,
            ],
            'billing' => [
                'address' => $this->billing->address,
            ],
            'order_details' => $this->getOrderDetails($this->orderDetails),
        ];
    }

    private function getOrderDetails($orderDetails)
    {
        $orderDetailsHtml = '';

        foreach ($orderDetails as $order) {
            $orderDetailsHtml .= '
                            <tr>
                                <td>'. $order->product->name .'</td>
                                <td class="text-center">'. (($order->size !=null) ? $order->size->name : "") .'</td>
                                <td><img src="'. asset("images/admin/product/small". '/' . $order->product->thumbnail_image) . '" height="50" width="50"></td>
                                <td class="text-center">'.$order->product_quantity.'</td>
                            </tr>';
        }

        return $orderDetailsHtml;
    }
}
