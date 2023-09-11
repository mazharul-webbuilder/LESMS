@extends('frontend.master.master')
@section('title')
    {{ $product->name  }} Details
@endsection
@section('content')

    <!-- feature__section__start -->
    <div class="featurearea featurearea--2 sp_top_100 sp_bottom_100" style="padding-top: 65px!important;">
        <div class="">
            <div class="container">
                <div class="row">

                    <div class="col-xl-6 col-lg-6 col-md-6">

                        <div class="featurearea__details__img">
                            <div class="swiper details__gallery__big">
                                <div class="featurearea__big__img swiper-wrapper">
                                    <div class="featurearea__single__big__img swiper-slide">
                                        <img src="{{asset("images/admin/product/large". "/" . $product->thumbnail_image)}}" alt="Product Big Img">
                                    </div>
                                    @foreach($product->galleryImages as $galleryImage)
                                        <div class="featurearea__single__big__img swiper-slide">
                                            <img src="{{asset("images/admin/gallery/large". "/" . $galleryImage->image)}}" alt="Product Big Img">
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                            <div thumbsSlider="" class="swiper details__gallery">
                                <div class=" featurearea__thumb__img swiper-wrapper">
                                    <div class="featurearea__single__thumb__img swiper-slide">
                                        <img src="{{asset("images/admin/product/small". "/" . $product->thumbnail_image)}}" alt="Product Big Img">
                                    </div>
                                    @foreach($product->galleryImages as $galleryImage)
                                        <div class="featurearea__single__thumb__img swiper-slide">
                                            <img src="{{asset("images/admin/gallery/small". "/" . $galleryImage->image)}}" alt="Product Big Img">
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="featurearea__inner">
                            <div class="featurearea__small__title">
                                <span>{{$product->productCategory->name}}</span>
                                @auth
                                    <button type="button" id="ProductAffiliateLink" value="{{$affiliate_link}}" class="btn btn-sm bg-secondary text-white">Click to Get Affiliate Link</button>
                                @endauth
                            </div>
                            <div class="featurearea__main__title">
                                <h3>{{$product->name}}</h3>
                            </div>
                            <div class="featurearea__small__title">
                                <span>{{$product->short_description}}</span>
                            </div>
                            <div class="featurearea__price">
                                @if($product->previous_price > 0)
                                    <span><del>Tk. {{$product->previous_price}} </del></span>
                                @endif
                                <span>Tk. {{$product->current_price}}</span>
                                @if ($product->featured)
                                    <span class="badge bg-primary me-1 p-1">Featured</span>
                                @endif
                                @if ($product->trending)
                                    <span class="badge bg-warning me-1 p-1">Trending</span>
                                @endif
                                @if ($product->best_sale)
                                    <span class="badge bg-success me-1 p-1">Best Sale</span>
                                @endif
                                @if ($product->recent_product)
                                    <span class="badge bg-info me-1 p-1">Recent Product</span>
                                @endif
                                @if ($product->flash_deal)
                                    <span class="badge bg-danger me-1 p-1">Flash Deal</span>
                                @endif
                                {{--                                <span class="featurearea__price__button black__color">-27%</span>--}}
                            </div>
                            <div class="featurearea__countdown__title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock timer__icon"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                <h5>Hurry up! Sale ends in</h5>
                            </div>
                            @php
                                $storedRandomDate = session('random_date');

                                if (!$storedRandomDate || now()->subHours(24)->greaterThan($storedRandomDate)) {
                                    $randomDays = rand(7, 15);
                                    $randomDate = now()->addDays($randomDays);
                                    session(['random_date' => $randomDate]);
                                }
                            @endphp
                            <div class="featurearea__countdown" data-countdown="{{  session('random_date')->format('Y/m/d')  }}">
                                {{--                            <div class="featurearea__countdown" data-countdown="{{ now()->addDays(15)->format('Y/m/d') }}">--}}
                                <div class="count"><p>00</p><span>Days</span></div>
                                <div class="count"><p>00</p><span>Hrs</span></div>
                                <div class="count"><p>00</p><span>Min</span></div>
                                <div class="count"><p>00</p><span>Sec</span></div>
                            </div>
                            <div class="featurearea__progress__text">
                                <h6>Only {{getProductStock($product->id)}} items in stock!</h6>
                                <div class="progress">
                                    <div role="progressbar" class="progress-bar wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay=".4s" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%; visibility: visible; animation-duration: 0.6s; animation-delay: 0.4s; animation-name: fadeInLeft;"></div>
                                </div>
                            </div>

                            @if(check_size($product->stcoks))
                            <div class="featurearea__size">
                                <span>Select Size:</span>
                            </div>
                            <div class="featurearea__size__button">
                                <ul>
                                    @foreach(getProductSizes($product->id) as $sizeId => $size)
                                        <li><a href="" onclick="event.preventDefault()" class="ProductSizeId" data-id="{{$sizeId}}">{{$size}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <div class="featurearea__size">
                                <span>Quantity</span>
                            </div>
                            <div class="featurearea__quantity">
                                <div class="featurearea__quantity__button cartarea__plus__minus">

                                    <form action="" method="POST" id="addToCartForm">
                                        @csrf
                                        <input type="hidden" name="size_id" id="SizeId">
                                        <input type="hidden" name="product_id" id="productIDforCart">
                                        <div class="dec qtybutton">- </div>
                                        <input type="hidden" class="selectQuantity">
                                        <input class="cartarea__plus__minus__box" id="quantityId" type="text" min="1" value="1" name="quantity"> <!-- Added name attribute -->
                                        <div class="inc qtybutton">+</div>
                                    </form>
                                </div>
                                <button class="featurearea__quantity__button" id="AddToCartInProductDeatil" href="javascript:void(0)" data-id="{{$product->id}}">Add to cart</button>
                            </div>
                            {{--                            <div class="featurearea__bottom__button">--}}
                            {{--                                <a href="#" data-id = {{$product->id}}>By it now</a>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- feature__section__end -->



    <!-- description__review__start -->
    <div class="descriptionarea sp_bottom_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 descriptionarea__tab__wrapper">
                    <ul class="nav  descriptionarea__tab__button" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="descriptionarea__link active"  data-bs-toggle="tab" data-bs-target="#description" type="button">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="descriptionarea__link"  data-bs-toggle="tab" data-bs-target="#product__Type" type="button">Return Policy</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="descriptionarea__link"  data-bs-toggle="tab" data-bs-target="#delivery__system" type="button">Privacy Policy</button>
                        </li>
                    </ul>
                    <div class="tab-content tab__content__wrapper" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description">
                            <p>
                                {!! $product->description !!}
                            </p>
                        </div>
                        <div class="tab-pane fade" id="product__Type" role="tabpanel" aria-labelledby="Return Policy">
                            {!! $product->return_policy !!}
                        </div>
                        <div class="tab-pane fade" id="delivery__system" role="tabpanel" aria-labelledby="Privacy Policy">
                            {!! $product->privacy_policy !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{--    <!-- faq__section__start -->--}}
    {{--    <div class="faqarea sp_bottom_50">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">--}}
    {{--                    <div class="faqarea__heading">--}}
    {{--                        <h3>faq</h3>--}}
    {{--                    </div>--}}
    {{--                </div>--}}


    {{--                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12">--}}

    {{--                    <div class="faqarea__wrapper">--}}
    {{--                        <div class="accordion" id="faqaccordion">--}}
    {{--                            <div class="accordion-item">--}}
    {{--                                <h2 class="accordion-header" id="headingOne">--}}
    {{--                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">--}}
    {{--                                        Can I cancel my account at any time?--}}
    {{--                                        <span class="accordion-btn"></span>--}}
    {{--                                    </button>--}}
    {{--                                </h2>--}}
    {{--                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqaccordion">--}}
    {{--                                    <div class="accordion-body">--}}
    {{--                                        <p>Non similique culpa in provident quos sit commodi beatae ea laborum suscipit id autem velit aut iusto odio et deleniti quis et doloremque enim vel consequuntur quos.</p>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="accordion-item">--}}
    {{--                                <h2 class="accordion-header" id="headingTwo">--}}
    {{--                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">--}}
    {{--                                        What happens after the license expires?--}}
    {{--                                        <span class="accordion-btn"></span>--}}
    {{--                                    </button>--}}
    {{--                                </h2>--}}
    {{--                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqaccordion">--}}
    {{--                                    <div class="accordion-body">--}}
    {{--                                        <p>Non similique culpa in provident quos sit commodi beatae ea laborum suscipit id autem velit aut iusto odio et deleniti quis et doloremque enim vel consequuntur quos.</p>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="accordion-item">--}}
    {{--                                <h2 class="accordion-header" id="headingThree">--}}
    {{--                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">--}}
    {{--                                        Does Harry have any documentations?--}}
    {{--                                        <span class="accordion-btn"></span>--}}
    {{--                                    </button>--}}
    {{--                                </h2>--}}
    {{--                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqaccordion">--}}
    {{--                                    <div class="accordion-body">--}}
    {{--                                        <p>Non similique culpa in provident quos sit commodi beatae ea laborum suscipit id autem velit aut iusto odio et deleniti quis et doloremque enim vel consequuntur quos.</p>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="accordion-item">--}}
    {{--                                <h2 class="accordion-header" id="headingFour">--}}
    {{--                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">--}}
    {{--                                        How long do I get support &amp; updates?--}}
    {{--                                        <span class="accordion-btn"></span>--}}
    {{--                                    </button>--}}
    {{--                                </h2>--}}
    {{--                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqaccordion">--}}
    {{--                                    <div class="accordion-body">--}}
    {{--                                        <p>Non similique culpa in provident quos sit commodi beatae ea laborum suscipit id autem velit aut iusto odio et deleniti quis et doloremque enim vel consequuntur quos.</p>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}



    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <!-- faq__section__end -->--}}

    <!-- about__tap__section__end -->
    <div class="gridarea__2 sp_top_100" data-aos="fade-up">
        <div class="container-fluid full__width__padding">

            <div class="section__title">

                <div class="section__title__heading">
                    <h2>Related Products</h2>
                </div>
            </div>

            <div class="row row__custom__class">

                <div class="swiper featured__course">
                    <div class="swiper-wrapper">
                        @foreach($related_products as $related_product)
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 grid-item column__custom__class swiper-slide">
                                <div class="gridarea__wraper product__grid">
                                    <div class="gridarea__img">
                                        <a href="{{ route('ecommerce.productDetails', ['slug' => $product->slug, 'usr_aft_code' => isAuthenticUser() ? getUserReferralAsAffiliateKey() : '']) }}"><img src="{{ asset("images/admin/product/medium" . "/" . $related_product->thumbnail_image)}}" alt="grid"></a>
                                        <div class="gridarea__small__button gridarea__small__button__1">
                                            <div class="grid__badge">
                                                @if ($product->featured)
                                                    Featured
                                                @elseif($product->trending)
                                                    Trending
                                                @elseif($product->best_sale)
                                                    Best Sale
                                                @else
                                                    Regular
                                                @endif
                                            </div>
                                        </div>
                                        <div class="gridarea__small__icon">
                                            <a href="#"><i class="icofont-heart-alt"></i></a>
                                        </div>

                                        <div class="product__grid__action">
                                            <ul>
                                                {{--                                            <li>--}}
                                                {{--                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">--}}
                                                {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>--}}
                                                {{--                                                    </svg>--}}
                                                {{--                                                </a>--}}
                                                {{--                                            </li>--}}
                                                <li>
                                                    <a class="grid__cart" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add to cart">
                                                        Add to cart
                                                    </a>
                                                </li>
                                                {{--                                            <li>--}}
                                                {{--                                                <span data-bs-toggle="modal" data-bs-target="#exampleModal">--}}
                                                {{--                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">--}}
                                                {{--                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>--}}
                                                {{--                                                </a>--}}
                                                {{--                                                </span>--}}
                                                {{--                                            </li>--}}
                                            </ul>
                                        </div>


                                    </div>
                                    <div class="gridarea__content">

                                        <div class="gridarea__heading">
                                            <h3><a href="product-details.html">{{$related_product->name}}</a></h3>
                                        </div>
                                        <div class="gridarea__price">
                                            Tk. {{$related_product->current_price}}
                                        </div>
                                        <div class="gridarea__bottom">

                                            {{--                                        <a href="instructor-details.html">--}}
                                            {{--                                            Sports--}}
                                            {{--                                        </a>--}}

                                            <div class="gridarea__star">
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <i class="icofont-star"></i>
                                                <span>{{random_int(3, 50)}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="slider__controls__wrap slider__controls__arrows">
                        <div class="swiper-button-next arrow-btn"></div>
                        <div class="swiper-button-prev arrow-btn"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-footer-assets')
    @include('frontend.ecommerce.product.product-details-script')
@endsection
