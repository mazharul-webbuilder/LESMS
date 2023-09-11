@extends('frontend.master.master')
@section('title')
    Products
@endsection
@section('content')
    <!-- theme fixed shadow -->
    <div>
        <div class="theme__shadow__circle"></div>
        <div class="theme__shadow__circle shadow__right"></div>

        <!-- theme fixed shadow -->
        <!-- breadcrumbarea__section__start -->


        <!-- shop__section__start -->
        <section class="shop__page__wrap  sp_bottom_100">
            <div class="container-fluid full__width__padding">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="shoptab">
                            {{--                        <div class="shoptab__inner nav">--}}


                            {{--                            <ul class="nav" id="myTab" role="tablist">--}}
                            {{--                                <li class="nav-item" role="presentation">--}}
                            {{--                                    <button data-bs-toggle="tab" data-bs-target="#grid__view" type="button">--}}
                            {{--                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 5.5 12.5">--}}
                            {{--                                            <defs></defs><defs></defs><g data-name="Layer 2"><g data-name="Layer 1"><g data-name="shop page"><g id="Group-10"><path d="M.75 0a.76.76 0 01.75.75v11a.76.76 0 01-.75.75.76.76 0 01-.75-.75v-11A.76.76 0 01.75 0z" class="cls-1"></path><path d="M4.75 0a.76.76 0 01.75.75v11a.76.76 0 01-.75.75.76.76 0 01-.75-.75v-11A.76.76 0 014.75 0z" class="cls-1" data-name="Rectangle"></path></g></g></g></g>--}}
                            {{--                                        </svg>--}}
                            {{--                                    </button>--}}
                            {{--                                </li>--}}
                            {{--                                <li class="nav-item" role="presentation">--}}
                            {{--                                    <button class="active" data-bs-toggle="tab" data-bs-target="#list_view" type="button">--}}
                            {{--                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.5 12.5">--}}
                            {{--                                            <defs></defs><defs><style>.cls-1{fill-rule:evenodd}</style></defs><g data-name="Layer 2"><g data-name="Layer 1"><g data-name="shop page"><g id="Group-16"><path d="M.75 0a.76.76 0 01.75.75v11a.76.76 0 01-.75.75.76.76 0 01-.75-.75v-11A.76.76 0 01.75 0z" class="cls-1"></path><path d="M4.75 0a.76.76 0 01.75.75v11a.76.76 0 01-.75.75.76.76 0 01-.75-.75v-11A.76.76 0 014.75 0z" class="cls-1" data-name="Rectangle"></path><path d="M8.75 0a.76.76 0 01.75.75v11a.76.76 0 01-.75.75.76.76 0 01-.75-.75v-11A.76.76 0 018.75 0z" class="cls-1" data-name="Rectangle"></path></g></g></g></g>--}}
                            {{--                                        </svg>--}}
                            {{--                                    </button>--}}
                            {{--                                </li>--}}
                            {{--                                <li class="nav-item" role="presentation">--}}
                            {{--                                    <button data-bs-toggle="tab" data-bs-target="#list_four" type="button" class="">--}}
                            {{--                                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.5 12.5">--}}
                            {{--                                            <defs></defs><defs><style>.cls-1{fill-rule:evenodd}</style></defs><g data-name="Layer 2"><g data-name="Layer 1"><g data-name="shop page"><g id="_4_col" data-name="4_col"><path d="M.75 0a.76.76 0 01.75.75v11a.76.76 0 01-.75.75.76.76 0 01-.75-.75v-11A.76.76 0 01.75 0z" class="cls-1"></path><path d="M4.75 0a.76.76 0 01.75.75v11a.76.76 0 01-.75.75.76.76 0 01-.75-.75v-11A.76.76 0 014.75 0z" class="cls-1" data-name="Rectangle"></path><path d="M8.75 0a.76.76 0 01.75.75v11a.76.76 0 01-.75.75.76.76 0 01-.75-.75v-11A.76.76 0 018.75 0z" class="cls-1" data-name="Rectangle"></path><path id="Rectangle-4" d="M12.75 0a.76.76 0 01.75.75v11a.76.76 0 01-.75.75.76.76 0 01-.75-.75v-11a.76.76 0 01.75-.75z" class="cls-1" data-name="Rectangle"></path></g></g></g></g>--}}
                            {{--                                        </svg>--}}
                            {{--                                    </button>--}}
                            {{--                                </li>--}}
                            {{--                            </ul>--}}



                            {{--                        </div>--}}
                            <div class="shoptab__shoing__wrap">
                                <div class="shoptab__select d-flex">
                                    <label for="SortBy">Sort by :</label>
                                    <select name="SortBy" id="SortBy">
                                        <option value="manual">Featured</option>
                                        <option value="best-selling">Best Selling</option>
                                        <option value="title-ascending">Alphabetically, A-Z</option>
                                        <option value="title-descending">Alphabetically, Z-A</option>
                                        <option value="price-ascending">Price, low to high</option>
                                        <option value="price-descending">Price, high to low</option>
                                        <option value="created-descending">Date, new to old</option>
                                        <option value="created-ascending">Date, old to new</option>
                                    </select>
                                </div>
                                <p>Showing 1 - 12  of 33 result </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-2 col-lg-12 col-md-12">
                        <div class="shopsidebar">
                            <div class="shopsidebar__top">
                                <h2>Filter:</h2>
                                <div class="shopsidebar__remove">
                                    <a href="#">Remove all</a>
                                </div>
                            </div>

                            <div class="shopsidebar__widget">
                                <details open="">
                                    <summary>Brands</summary>
                                    <div class="shopsidebar__list">
                                        <ul>
                                            @foreach($category->product_categories as $brand_category)
                                                <li>
                                                    <a href="{{route('ecommerce.BrandWiseProduct', ['slug' => $brand_category->brand->slug])}}"> <div class="shopsidebar__box">
                                                            <input type="checkbox">
                                                            <span>{{$brand_category->brand->name}}</span>
                                                        </div></a>
                                                    <a href="#"><span class="shopsidebar__number">{{getNumberOfBrandProductByCategory($brand_category->brand, $brand_category->product_category_id)}}</span></a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </details>
                            </div>

                            <div class="shopsidebar__widget">
                                <details open="">
                                    <summary>Size</summary>
                                    <div class="shopsidebar__list">
                                        <ul>
                                            @foreach(sizes() as $size)
                                                <li>
                                                    <a href="#"> <div class="shopsidebar__box">
                                                            <input type="checkbox">
                                                            <span>{{$size->name}}</span>
                                                        </div></a>
                                                    <a href="#"><span class="shopsidebar__number">(14)</span></a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </details>
                            </div>


                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-12 col-md-12">
                        <div class="row">
                            <!-- single product start -->
                            @foreach($products as $product)
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 column__custom__class">
                                    <div class="gridarea__wraper product__grid" style="border: 1px solid #ebe4e4!important; border-radius: 6px;">
                                        <div class="gridarea__img">
                                            <a href="{{route('ecommerce.productDetails', ['slug' => $product->slug, 'usr_aft_code' => isAuthenticUser() ? getUserReferralAsAffiliateKey() : ''])}}"><img src="{{ asset("images/admin/product/medium/". '/' . $product->thumbnail_image)}}" alt="grid"></a>
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
                                                <button type="button" class="border-0 bg-transparent addToWishlist" data-id="{{$product->id}}">
                                                    <i class="icofont-heart-alt"></i>
                                                </button>
                                            </div>
                                            <div class="product__grid__action">
                                                <ul>
                                                    <li>
                                                        {{--compare button--}}
                                                        {{--                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Add To Compare">--}}
                                                        {{--                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M304 160l-64-64 64-64M207 352l64 64-64 64"/><circle cx="112" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="400" cy="416" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 96h84a60 60 0 0160 60v212M255 416h-84a60 60 0 01-60-60V144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/>--}}
                                                        {{--                                                        </svg>--}}
                                                        {{--                                                    </a>--}}
                                                    </li>
                                                    <li>
                                                        {{--Add to cart form--}}
                                                        <form action="" method="POST" id="addToCartForm">
                                                            @csrf
                                                            <input type="hidden" name="size_id" id="SizeId">
                                                            <input type="hidden" name="product_id" id="productIDforCart" >
                                                            <input type="hidden" name="quantity" value="1">
                                                        </form>
                                                        {{--Add to cart button--}}
                                                        <a class="grid__cart AddToCartInProductDeatil"
                                                           href="javascript:void(0)"
                                                           data-id="{{$product->id}}"
                                                            data-bs-original-title="Add to cart">
                                                        Add to cart
                                                        </a>
                                                    </li>
                                                    <li>
                                                    <span data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        {{--product view button--}}
                                                        {{--                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" tabindex="0" data-bs-original-title="Quick View">--}}
                                                        {{--                                                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>--}}
                                                        {{--                                                        </a>--}}
                                                    </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="gridarea__content">

                                            <div class="gridarea__heading">
                                                <h3 style="font-size: 19px!important;"><a href="{{route('ecommerce.productDetails', ['slug' => $product->slug, 'usr_aft_code' => isAuthenticUser() ? getUserReferralAsAffiliateKey() : ''])}}">{{$product->name}}</a></h3>
                                            </div>
                                            <div class="gridarea__price">
                                                Tk.{{$product->current_price}}
                                                {{--                                            @if($product->current_price != null)--}}
                                                {{--                                                <del>/ Tk.{{$product->previous_price}}</del>--}}
                                                {{--                                            @endif--}}
                                            </div>
                                            <div class="gridarea__bottom">

                                                {{--                                            <a href="instructor-details.html">--}}
                                                {{--                                                {{$product->productCategory->name}}--}}
                                                {{--                                            </a>--}}

                                                <div class="gridarea__star">
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <i class="icofont-star"></i>
                                                    <span>({{random_int(3, 50)}})</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- single product end -->
                        </div>
                        <div class="main__pagination__wrapper" data-aos="fade-up">
                            <ul class="main__page__pagination">

                                <li><a class="disable" href="#"><i class="icofont-double-left"></i></a></li>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="icofont-double-right"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- blog__section__end -->
        @endsection
        @section('page-footer-assets')
            @include('frontend.ecommerce.product.products-script')
            @include('frontend.ecommerce.product.add-to-wishlist')
        @endsection
