@extends('frontend.master.master')
@section('title')
    Cart
@endsection
@section('content')
    <style>
        .cart-quantity-box {
            color: var(--blackColor);
            float: left;
            font-size: 14px;
            height: 50px;
            margin: 0;
            width: 100%;
            background: transparent none repeat scroll 0 0;
            border: none;
            padding: 0;
            text-align: center;
        }
    </style>
    <!-- cart__section__start -->
    @if(totalCart() > 0)
    <div class="cartarea sp_bottom_100 sp_top_100" id="CheckoutSection">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <form action="#">
                        <div class="cartarea__table__content table-responsive">

                            <table>
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                                </thead>
                                <tbody class="appearUpdatedCarts">
                                @foreach(getCarts() as $cart)
                                <tr>
                                    <td class="cartarea__product__thumbnail">
                                        <a href="{{route('ecommerce.productDetails', ['slug' => $cart->product->slug])}}">
                                            <img src="{{ asset("images/admin/product/small" . "/" . $cart->product->thumbnail_image)}}" alt="product-1">
                                        </a>
                                    </td>
                                    <td class="cartarea__product__name"><a href="{{route('ecommerce.productDetails', ['slug' => $cart->product->slug])}}"> {{$cart->product->name}} </a></td>
                                    <td class="cartarea__product__price__cart"><span class="amount">{{currency()}} : {{$cart->product->current_price}}</span></td>
                                    <td class="cartarea__product__quantity">
                                        <div class="cartarea__plus__minus">
                                            <div class="dec qtybutton" data-id="{{$cart->id}}">- </div>
                                            <input class="cart-quantity-box" disabled type="text" value="{{$cart->quantity}}"
                                                   name="updates[]">
                                            <div class="inc qtybutton" data-id="{{$cart->id}}">+</div>
                                        </div>
                                    </td>
                                    <td class="cartarea__product__subtotal">{{currency()}} : {{$cart->product->current_price * $cart->quantity}}</td>
                                    <td class="cartarea__product__remove">
                                        <a href="javascript:void(0)" class="TrashCartItem" data-id="{{$cart->id}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title >Trash</title><path d="M112 112l20 320c.95 18.49 14.4 32 32 32h184c17.67 0 30.87-13.51 32-32l20-320" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 112h352"/><path d="M192 112V72h0a23.93 23.93 0 0124-24h80a23.93 23.93 0 0124 24h0v40M256 176v224M184 176l8 224M328 176l-8 224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cartarea__shiping__update__wrapper">
                        <div class="cartarea__shiping__update">
{{--                            <a href="{{ route('ecommerce.categoryWiseProduct', ['slug' => $cart->product->productCategory->slug]) }}">Continue Shopping</a>--}}
                        </div>
                    </div>
                </div>
            </div>

                <div class="row" >
{{--                <div class="col-lg-6 col-lg-4 col-md-12 col-12">--}}
{{--                    <div class="cartarea__discount__code__wrapper cartarea__tax">--}}
{{--                        <div class="cartarea__title">--}}
{{--                            <h4>Order Note</h4>--}}
{{--                        </div>--}}
{{--                        <div class="cartarea__discount__code">--}}
{{--                            <p>Special instructions for seller</p>--}}
{{--                            <textarea name="note" id="CartSpecialInstructions"></textarea>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-lg-6 col-lg-4 col-md-12 col-12">
                    <div class="cartarea__grand__totall cartarea__tax">
                        <div class="cartarea__title">
                            <h4>Cart Total</h4>
                        </div>
                        <h5 >Cart Totals
                            <span id="cartTotalPriceInCart">{{currency()}} : {{getCartTotalPrice()}}</span>
                        </h5>
                        <a href="{{route('ecommerce.checkout')}}">Proceed to Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
        <div class="cartarea sp_bottom_100 sp_top_100 showCartEmpty" id="">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 text-center" id="">
                        <div class="display-4">Your Cart</div>
                        <p class="lead">Your cart is currently empty.</p>
                        <a href="#" class="btn btn-primary">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- cart__section__end-->

@endsection
@section('page-footer-assets')
   @include('frontend.ecommerce.cart.cart-script')
@endsection
