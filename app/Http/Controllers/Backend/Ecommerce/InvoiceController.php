<?php

namespace App\Http\Controllers\Backend\Ecommerce;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\System;
use Illuminate\Http\Request;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;


class InvoiceController extends Controller
{
    /**
     * Download Ecommerce Order Invoice
    */
    public function invoice($id)
    {

        $order = Order::find($id);

        $customer = new Buyer([
            'name'          => $order->user->full_name,
            'custom_fields' => [
                'email' => $order->user->email,
                'Phone 1 ' => $order->billing->phone,
                'Phone 2 ' => $order->user->phone,
            ],
        ]);
        $items = [ ];

        foreach ($order->orderDetails as $orderDetail) {
            $item = (new InvoiceItem())
                ->title($orderDetail->product->name)
                ->quantity($orderDetail->product_quantity)
                ->pricePerUnit($orderDetail->product->current_price)
            ;
            array_push($items, $item);
        }

        $invoice = Invoice::make()
            ->buyer($customer)
            ->shipping(System::$SHIPPING_CHARGE)
            ->addItems($items);

        return $invoice->stream();

    }
}
