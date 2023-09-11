@extends('frontend.master.master')
@section('title')
    Checkout Page
@endsection
@section('content')



    <!-- checkout__section__start -->
    <div class="checkoutarea sp_bottom_100 sp_top_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="checkoutarea__billing">
                        <div class="checkoutarea__billing__heading">
                            <h2>Billing Details</h2>
                        </div>
                        <div class="checkoutarea__billing__form">
                            <form action="" method="post" id="orderPlacesForm">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="checkoutarea__inputbox">
                                            <label for="first__name">First Name *</label>
                                            <input type="text" id="first__name" name="first_name" class="info" placeholder="First Name">
                                            <span class="error-message" id="email-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="checkoutarea__inputbox">
                                            <label for="last__name">Last Name*</label>
                                            <input type="text" id="last__name" name="last_name" class="info" placeholder="Last Name">
                                            <span class="error-message" id="email-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="checkoutarea__inputbox">
                                            <label for="email__address">Email Address</label>
                                            <input type="text" id="email__address" name="email" class="info" placeholder="Your email">
                                            <span class="error-message" id="email-error"></span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="checkoutarea__inputbox">
                                            <label for="phone__number">Phone Number*</label>
                                            <input type="text" id="phone__number" name="phone" class="info" placeholder="Phone Number">
                                            <span class="error-message" id="email-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="checkoutarea__inputbox">
                                            <label for="address__info">Address *</label>
                                            <input type="text" id="address__info" name="address" class="info" placeholder="Address">
                                            <span class="error-message" id="email-error"></span>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="checkoutarea__inputbox">
                                            <label for="post__code">Post Code / Zip Code*</label>
                                            <input type="text" id="post__code" name="zip_code" class="info" placeholder="Post Code/Zip Code">
                                            <span class="error-message" id="email-error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkoutarea__inputbox">
                                        <label for="order__note">Order Notes</label>
                                        <input type="text" id="order__note" name="order_note" class="info" placeholder="Order Notes">
                                        <span class="error-message" id="order-note-error"></span>
                                    </div>
                                </div>
                                <div class="checkoutarea__payment__input__box">
                                    <a class="default__button" href="javascript:void(0)" id="orderPlaceButton">Place order</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div class="checkoutarea__payment__wraper" style="padding-top: 0!important;">
                        <div class="checkoutarea__total">
                            <h3>Your order</h3>
                            <form action="#" method="post">
                                <div class="checkoutarea__table__wraper">
                                    <table class="checkoutarea__table">
                                        <thead>
                                        <tr class="checkoutarea__item">
                                            <td class="checkoutarea__ctg__type"> Product</td>
                                            <td class="checkoutarea__cgt__des"> Total</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(getCarts() as $cart)
                                        <tr class="checkoutarea__item prd-name">
                                            <td class="checkoutarea__ctg__type"> {{$cart->product->name}} × <span>{{$cart->quantity}}</span></td>
                                            <td class="checkoutarea__cgt__des">{{currency()}} :  {{ $cart->quantity * $cart->product->current_price }}</td>
                                        </tr>
                                        @endforeach

                                        <tr class="checkoutarea__item">
                                            <td class="checkoutarea__ctg__type"> Subtotal</td>
                                            <td class="checkoutarea__cgt__des">{{currency()}} : {{getCartTotalPrice()}}</td>
                                        </tr>
                                        <tr class="checkoutarea__item">
                                            <td class="checkoutarea__ctg__type"> Tax Total</td>
                                            <td class="checkoutarea__cgt__des">{{currency()}} : 00</td>
                                        </tr>
                                        <tr class="checkoutarea__item">
                                            <td class="checkoutarea__item">Shipping Charge</td>
                                            <td class="checkoutarea__cgt__des ship-opt">
                                                <div class="checkoutarea__shipp">
                                                    <label for="pay-toggle"><span>{{currency()}} : {{getShippingCharge()}}</span></label>
                                                </div>
{{--                                                <div class="checkoutarea__shipp">--}}
{{--                                                    <input type="radio" id="pay-toggle2" name="ship">--}}
{{--                                                    <label for="pay-toggle2">Free Shipping</label>--}}
{{--                                                </div>--}}
                                            </td>
                                        </tr>
                                        <tr class="checkoutarea__item">
                                            <td class="checkoutarea__itemcrt-total"> Total</td>
                                            <td class="checkoutarea__cgt__des prc-total"> {{currency()}} : {{getGrandTotal()}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                        <div class="checkoutarea__payment clearfix">
                            <div class="checkoutarea__payment__toggle">
                                <form action="#">
                                    <div class="checkoutarea__payment__total">
{{--                                        <div class="checkoutarea__payment__type">--}}
{{--                                            <input type="radio" id="pay-toggle01" name="pay">--}}
{{--                                            <label for="pay-toggle01">Direct Bank Transfer</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="checkoutarea__payment__type">--}}
{{--                                            <input type="radio" id="pay-toggle02" name="pay">--}}
{{--                                            <label for="pay-toggle02">Cheque Payment</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="checkoutarea__payment__type">--}}
{{--                                            <input type="radio" id="pay-toggle03" name="pay">--}}
{{--                                            <label for="pay-toggle03">Cash on Delivery</label>--}}
{{--                                        </div>--}}
{{--                                        <div class="checkoutarea__payment__type">--}}
{{--                                            <input type="radio" id="pay-toggle04" name="pay">--}}
{{--                                            <label for="pay-toggle04">Paypal</label>--}}
{{--                                        </div>--}}
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout__section__end-->
@endsection
@section('page-footer-assets')
    @include('frontend.ecommerce.order.order-script')
@endsection
