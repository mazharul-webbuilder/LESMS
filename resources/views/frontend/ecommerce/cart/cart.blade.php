@extends('frontend.master.master')
@section('title')
    Cart
@endsection
@section('content')



    <!-- cart__section__start -->
    <div class="cartarea sp_bottom_100 sp_top_100">
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
                                <tbody>
                                <tr>
                                    <td class="cartarea__product__thumbnail">
                                        <a href="#">
                                            <img src="{{ asset('asset/img')}}/products/2.jpg" alt="product-1">
                                        </a>
                                    </td>
                                    <td class="cartarea__product__name"><a href="product-details.html">Product title acc 10 - s / red</a></td>
                                    <td class="cartarea__product__price__cart"><span class="amount">$110.00</span></td>
                                    <td class="cartarea__product__quantity">
                                        <div class="cartarea__plus__minus">
                                            <div class="dec qtybutton">- </div>
                                            <input class="cartarea__plus__minus__box" type="text" value="1"
                                                   name="updates[]">
                                            <div class="inc qtybutton">+</div>
                                        </div>

                                    </td>
                                    <td class="cartarea__product__subtotal">$110.00</td>
                                    <td class="cartarea__product__remove">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Pencil</title><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M364.13 125.25L87 403l-23 45 44.99-23 277.76-277.13-22.62-22.62zM420.69 68.69l-22.62 22.62 22.62 22.63 22.62-22.63a16 16 0 000-22.62h0a16 16 0 00-22.62 0z"/></svg></a>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Trash</title><path d="M112 112l20 320c.95 18.49 14.4 32 32 32h184c17.67 0 30.87-13.51 32-32l20-320" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 112h352"/><path d="M192 112V72h0a23.93 23.93 0 0124-24h80a23.93 23.93 0 0124 24h0v40M256 176v224M184 176l8 224M328 176l-8 224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cartarea__product__thumbnail">
                                        <a href="#">
                                            <img src="{{ asset('asset/img')}}/products/1.jpg" alt="product 2">
                                        </a>
                                    </td>
                                    <td class="cartarea__product__name"><a href="product-details.html">Product title acc 10 - s / red</a></td>
                                    <td class="cartarea__product__price__cart"><span class="amount">$110.00</span></td>
                                    <td class="cartarea__product__quantity">
                                        <div class="cartarea__plus__minus">
                                            <div class="dec qtybutton">-
                                            </div>
                                            <input class="cartarea__plus__minus__box" type="text" value="1"
                                                   name="updates[]">
                                            <div class="inc qtybutton">+</div>
                                        </div>

                                    </td>
                                    <td class="cartarea__product__subtotal">$110.00</td>
                                    <td class="cartarea__product__remove">
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Pencil</title><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M364.13 125.25L87 403l-23 45 44.99-23 277.76-277.13-22.62-22.62zM420.69 68.69l-22.62 22.62 22.62 22.63 22.62-22.63a16 16 0 000-22.62h0a16 16 0 00-22.62 0z"/></svg></a>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Trash</title><path d="M112 112l20 320c.95 18.49 14.4 32 32 32h184c17.67 0 30.87-13.51 32-32l20-320" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 112h352"/><path d="M192 112V72h0a23.93 23.93 0 0124-24h80a23.93 23.93 0 0124 24h0v40M256 176v224M184 176l8 224M328 176l-8 224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg></a>
                                    </td>
                                </tr>
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
                            <a href="">Continue Shopping</a>
                        </div>
                        <div class="cartarea__clear">
                            <a href="#">Update Cart</a>
                            <a href="#">Clear Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-12">
                    <div class="cartarea__tax">
                        <div class="cartarea__title">
                            <h4>Estimate Shipping And Tax</h4>
                        </div>
                        <div class="cartarea__text">
                            <p>Enter your destination to get a shipping estimate.</p>
                        </div>
                        <div class="cartarea__select">
                            <div class="cartarea__tax__select">
                                <label for="address__country">* Country</label>
                                <select name="email" id="address__country">
                                    <option value="USA">USA</option>
                                    <option value="UK">UK</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Russia">Russia</option>
                                    <option value="China">China</option>
                                </select>
                            </div>
                        </div>
                        <div class="cartarea__code cartarea__select">
                            <label for="address__zip">* Zip/Postal Code</label>
                            <input type="text" placeholder="Zip/Postal Code" id="address__zip" name="address[zip]">
                        </div>
                        <button type="button" class="default__button">Calculate shipping</button>
                    </div>
                </div>
                <div class="col-lg-4 col-lg-4 col-md-12 col-12">
                    <div class="cartarea__discount__code__wrapper cartarea__tax">
                        <div class="cartarea__title">
                            <h4>Cart Note</h4>
                        </div>
                        <div class="cartarea__discount__code">
                            <p>Special instructions for seller</p>
                            <textarea name="note" id="CartSpecialInstructions"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-lg-4 col-md-12 col-12">
                    <div class="cartarea__grand__totall cartarea__tax">
                        <div class="cartarea__title">
                            <h4>Cart Total</h4>
                        </div>
                        <h5>Cart Totals
                            <span>$189.00</span>
                        </h5>
                        <a href="#">Proceed to Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart__section__end-->

@endsection
