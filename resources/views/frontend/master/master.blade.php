<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('asset/img/favicon.ico') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{asset('asset/css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{ asset('asset/css/slick.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">

    @yield('page-header-assets')

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
            document.documentElement.classList.add("is_dark");
        }
        if (localStorage.getItem("theme-color") === "light") {
            document.documentElement.classList.remove("is_dark");
        }
    </script>

</head>


<body class="body__wrapper">
<!-- pre loader area start -->
{{--<div id="back__preloader">--}}
{{--    <div id="back__circle_loader"></div>--}}
{{--    <div class="back__loader_logo">--}}
{{--        <img src="{{ asset('asset/img') }}/pre.png" alt="Preload">--}}
{{--    </div>--}}
{{--</div>--}}
{{--</div>--}}
<!-- pre loader area end -->

<!-- Dark/Light area start -->
<div class="mode_switcher my_switcher">
    <button id="light--to-dark-button" class="light align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon dark__mode" viewBox="0 0 512 512"><path d="M160 136c0-30.62 4.51-61.61 16-88C99.57 81.27 48 159.32 48 248c0 119.29 96.71 216 216 216 88.68 0 166.73-51.57 200-128-26.39 11.49-57.38 16-88 16-119.29 0-216-96.71-216-216z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>

        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon light__mode" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M256 48v48M256 416v48M403.08 108.92l-33.94 33.94M142.86 369.14l-33.94 33.94M464 256h-48M96 256H48M403.08 403.08l-33.94-33.94M142.86 142.86l-33.94-33.94"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"/></svg>

        <span class="light__mode">Light</span>
        <span class="dark__mode">Dark</span>
    </button>
</div>
<!-- Dark/Light area end -->

<main class="main_wrapper">

    <!-- topbar__section__stert -->
    <div class="topbararea">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="topbar__left">
                        <ul>
                            <li>
                                Call Bd: +88 019 732 173 48
                            </li>
                            <li>
                                - Mail Bd: mdyeasinmiaarafat@gmail.com
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="topbar__right">
                        <div class="topbar__icon">
                            <i class="icofont-location-pin"></i>
                        </div>
                        <div class="topbar__text">
                            <p>R-1/Block-C Khilgaon, Dhaka, Bangladesh</p>
                        </div>
                        <div class="topbar__list">
                            <ul>
                                <li>
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-youtube-play"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- topbar__section__end -->


    <!-- headar section start -->
    <header>
        <div class="headerarea headerarea__3 header__sticky header__area">
            <div class="container desktop__menu__wrapper">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <div class="headerarea__left">
                            <div class="headerarea__left__logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('asset/img/favicon.ico') }}" alt="logo"></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 main_menu_wrap">
                        <div class="headerarea__main__menu">
                            <nav>
                                <ul>

                                    <li>
                                        <a class="headerarea__has__dropdown" href="{{route('home')}}">Home</a>
                                    </li>
                                    <li>
                                        <a class="headerarea__has__dropdown" href="{{ route('about') }}">About</a>
                                    </li>
                                    <li>
                                        <a class="headerarea__has__dropdown" href="javascript:void(0)">Blogs</a>
                                    </li>

                                    <li><a class="headerarea__has__dropdown" href="course.html">Course
                                            <i class="icofont-rounded-down"></i>
                                        </a>
                                        <ul class="headerarea__submenu">
                                            <li><a href="course.html">Course</a></li>
                                            <li><a href="course-dark.html">Course Category 1</a></li>
                                            <li><a href="course-list.html">Course Category 2</a></li>
                                        </ul>
                                    </li>


                                    <li><a class="headerarea__has__dropdown" href="javascript:void(0)">Shop
                                            <i class="icofont-rounded-down"></i>
                                        </a>
                                        <ul class="headerarea__submenu">
                                            @foreach($categories as $category)
                                                <li><a href="{{route('ecommerce.categoryWiseProduct', ['slug' => $category->slug])}}">{{$category->name}}</a></li>
                                            @endforeach
                                        </ul>

                                    </li>


                                    <li><a href="{{route('contact')}}">Contact</a>

                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="headerarea__right">
                            {{--Header Wishlist--}}
                            <div class="header__cart">
                                <span class="totatCartItem" id="wishListCounterId" style="position: absolute;top: 24px;right: 10px;border-radius: 50%;color: white;width: 22px;height: 22px;background: #F2277EFF;padding: 2px;font-size: 10px;font-weight: 500;padding-bottom: -52px;padding-right: 4px;">{{getNumberOfItemInWishlist()}}</span>
                                <a href="#"> <i class="icofont-heart-alt"></i></a>
                                <div class="header__right__dropdown__wrapper wishtListFreshContent">
                                    {{--Single Cart Product--}}
                                    @if(getNumberOfItemInWishlist()>0)
                                        @foreach(getWishlist() as $wishlist)
                                            <div class="header__right__dropdown__inner">
                                                <div class="single__header__right__dropdown">

                                                    <div class="header__right__dropdown__img">
                                                        <a href="{{ route('ecommerce.productDetails', ['slug' => $wishlist->product->slug]) }}">
                                                            <img src="{{ asset("images/admin/product/small" . "/" . $wishlist->product->thumbnail_image) }}" alt="{{$wishlist->product->name}}">
                                                        </a>
                                                    </div>
                                                    <div class="header__right__dropdown__content">

                                                        <a href="{{ route('ecommerce.productDetails', ['slug' => $wishlist->product->slug]) }}">{{$wishlist->product->name}}</a>
                                                        <p>{{$wishlist->quantity}} x <span class="price">{{$wishlist->product->current_price}} .Tk</span></p>

                                                    </div>
                                                    <div class="header__right__dropdown__close">
                                                        <a href="javascript:void(0)"><i class="icofont-close-line wishlistCloseBtn"  data-id="{{$wishlist->id}}" ></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        {{--End Single Cart Product--}}

{{--                                        <p class="dropdown__price">Total Including Tax: <span>{{currency()}} {{number_format(getCartTotalPrice())}}</span>--}}
{{--                                        </p>--}}
{{--                                        <div class="header__right__dropdown__button">--}}
{{--                                            <a href="{{route('ecommerce.cart')}}" class="white__color">VIEW--}}
{{--                                                CART</a>--}}
{{--                                            --}}{{--                                        <a href="#" class="blue__color">CHECKOUT</a>--}}
{{--                                        </div>--}}
                                    @else
                                        <h4 class="text-center">Empty Cart</h4>
                                    @endif
                                </div>
                            </div>
                            {{--Header Cart--}}
                            <div class="header__cart">
                                <span class="totatCartItem" id="cartCounterId" style="position: absolute;top: 24px;right: 10px;border-radius: 50%;color: white;width: 22px;height: 22px;background: #F2277EFF;padding: 2px;font-size: 10px;font-weight: 500;padding-bottom: -52px;padding-right: 4px;">{{totalCart()}}</span>
                                <a href="#"> <i class="icofont-cart-alt"></i></a>
                                <div class="header__right__dropdown__wrapper cartList">
                                    {{--Single Cart Product--}}
                                    @if(totalCart()>0)
                                    @foreach(getCarts() as $cart)
                                        <div class="header__right__dropdown__inner">
                                        <div class="single__header__right__dropdown">

                                            <div class="header__right__dropdown__img">
                                                <a href="{{ route('ecommerce.productDetails', ['slug' => $cart->product->slug]) }}">
                                                    <img src="{{ asset("images/admin/product/small" . "/" . $cart->product->thumbnail_image) }}" alt="{{$cart->product->name}}">
                                                </a>
                                            </div>
                                            <div class="header__right__dropdown__content">

                                                <a href="{{ route('ecommerce.productDetails', ['slug' => $cart->product->slug]) }}">{{$cart->product->name}}</a>
                                                <p>{{$cart->quantity}} x <span class="price">{{$cart->product->current_price}} .Tk</span></p>

                                            </div>
                                            <div class="header__right__dropdown__close">
                                                <a href="javascript:void(0)"><i class="icofont-close-line cartCloseBtn"  data-id="{{$cart->id}}" ></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{--End Single Cart Product--}}

                                    <p class="dropdown__price">Total Including Tax: <span>{{currency()}} {{number_format(getCartTotalPrice())}}</span>
                                    </p>
                                    <div class="header__right__dropdown__button">
                                        <a href="{{route('ecommerce.cart')}}" class="white__color">VIEW
                                            CART</a>
{{--                                        <a href="#" class="blue__color">CHECKOUT</a>--}}
                                    </div>
                                    @else
                                        <h4 class="text-center">Empty Cart</h4>
                                    @endif
                                </div>
                            </div>
                            @if (Auth::guard('web')->check())
                                <div class="main_menu_wrap">
                                    <div class="headerarea__main__menu">
                                        <nav>
                                            <ul>
                                                <li><a class=""
                                                       style="padding: 10px 15px; border: 1px solid #6528F7; border-radius: 5px;"
                                                       href="javascript:void(0)">{{Auth::user()->first_name}}
                                                        <i class="icofont-rounded-down"></i></a>
                                                    <ul class="headerarea__submenu" style="min-width: 120px; top: 80px">
                                                        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                                                        <li><a href="#">Setting</a></li>
                                                        <li>
                                                            <a href="javascript:void(0)"
                                                               onclick="event.preventDefault();
                                                               document.getElementById('User{{Auth::user()->id}}LogoutForm').submit()">Logout</a>
                                                        </li>
                                                        <form action="{{ route('logout') }}" method="post" id="User{{ Auth::user()->id }}LogoutForm">
                                                            @csrf
                                                        </form>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            @else
                                <div class="headerarea__login">
                                    <a href="{{ route('login') }}">Login</a>
                                </div>
                                <div class="headerarea__button">
                                    <a href="{{ route('register') }}">Sign Up</a>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="container-fluid mob_menu_wrapper">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="mobile-logo">
                        <a class="logo__dark" href="#"><img src="{{ asset('asset/img') }}/logo/logo_1.png" alt="logo"></a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="header-right-wrap">

                        <div class="mobile-off-canvas">
                            <a class="mobile-aside-button" href="#"><i class="icofont-navigation-menu"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- header section end -->

    <!-- Mobile Menu Start Here -->
    <div class="mobile-off-canvas-active">
        <a class="mobile-aside-close"><i class="icofont  icofont-close-line"></i></a>
        <div class="header-mobile-aside-wrap">
            <div class="mobile-search">
                <form class="search-form" action="#">
                    <input type="text" placeholder="Search entire store…">
                    <button class="button-search"><i class="icofont icofont-search-2"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap">

                <div class="mobile-navigation">

                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="{{route('home')}}">Home</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home Style 1</a></li>
                                    <li><a href="index-dark.html">Home 1 (Dark)</a></li>
                                    <li><a href="home-2.html">Home Style 2</a></li>
                                    <li><a href="home-2-dark.html">Home 2 (Dark)</a></li>
                                    <li><a href="home-3.html">Home Style 3</a></li>
                                    <li><a href="home-3-dark.html">Home 3 (Dark)</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="about.html">About</a>

                            </li>

                            <li class="menu-item-has-children"><a href="portfolio.html">blog</a>
                                <ul class="dropdown">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-dark.html">Blog (Dark)</a></li>
                                    <li><a href="blog-details.html">Blog-details</a></li>
                                    <li><a href="blog-details-dark.html">Blog-details (Dark)</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children "><a href="course.html">Course</a>
                                <ul class="dropdown">
                                    <li><a href="course.html">Course</a></li>
                                    <li><a href="course-dark.html">Course (Dark)</a></li>
                                    <li><a href="course-list.html">Course List</a></li>
                                    <li><a href="course-list-dark.html">Course List (Dark)</a></li>
                                    <li><a href="course-grid.html">Course Grid</a></li>
                                    <li><a href="course-grid-dark.html">Course Grid (Dark)</a></li>
                                    <li><a href="course-details.html">Course-Details</a></li>
                                    <li><a href="course-details-dark.html">Details (Dark)</a></li>
                                    <li><a href="course-details-2.html">Details 2</a></li>
                                    <li><a href="course-details-2-dark.html">Details 2 (Dark)</a></li>
                                    <li><a href="course-details-3.html">Details 3</a></li>
                                    <li><a href="course-details-3-dark.html">Details 3 (Dark)</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children "><a href="instructor.html">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="about-dark.html">About (Dark)</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="contact-dark.html">Contact (Dark)</a></li>
                                    <li><a href="instructor.html">Instructor</a></li>
                                    <li><a href="instructor-dark.html">Instructor (Dark)</a></li>
                                    <li><a href="instructor-details.html">Instructor-Details</a></li>
                                    <li><a href="instructor-details-dark.html">Details (Dark)</a></li>
                                    <li><a href="event-details.html">Event-Details</a></li>
                                    <li><a href="event-details-dark.html">Details (Dark)</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="login-dark.html">Login (Dark)</a></li>
                                    <li><a href="error.html">Error</a></li>
                                    <li><a href="error-dark.html">Error (Dark)</a></li>
                                </ul>
                            </li>
                            <li><a class="menu-item-has-children" href="contact.html">Contact</a></li>
                        </ul>
                    </nav>

                </div>

            </div>
            <div class="mobile-curr-lang-wrap">
                <div class="single-mobile-curr-lang">
                    <a class="mobile-language-active" href="#">Language <i class="icofont-thin-down"></i></a>
                    <div class="lang-curr-dropdown lang-dropdown-active">
                        <ul>
                            <li><a href="#">English (US)</a></li>
                            <li><a href="#">English (UK)</a></li>
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </div>
                </div>

                <!-- <div class="single-mobile-curr-lang">
                    <a class="mobile-currency-active" href="#">Currency <i class="icofont-thin-down"></i></a>
                    <div class="lang-curr-dropdown curr-dropdown-active">
                        <ul>
                            <li><a href="#">USD</a></li>
                            <li><a href="#">EUR</a></li>
                            <li><a href="#">Real</a></li>
                            <li><a href="#">BDT</a></li>
                        </ul>
                    </div>
                </div> -->

                <div class="single-mobile-curr-lang">
                    <a class="mobile-account-active" href="#">My Account <i class="icofont-thin-down"></i></a>
                    <div class="lang-curr-dropdown account-dropdown-active">
                        <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="login.html">Creat Account</a></li>
                            <li><a href="login.html">My Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mobile-social-wrap">
                <a class="facebook" href="#"><i class="icofont icofont-facebook"></i></a>
                <a class="twitter" href="#"><i class="icofont icofont-twitter"></i></a>
                <a class="pinterest" href="#"><i class="icofont icofont-pinterest"></i></a>
                <a class="instagram" href="#"><i class="icofont icofont-instagram"></i></a>
                <a class="google" href="#"><i class="icofont icofont-youtube-play"></i></a>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end Here -->

    @yield('content')

    <!-- footer__section__start -->
    <div class="footerarea">
        <div class="container">
            <div class="footerarea__newsletter__wraper">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-up">
                        <div class="footerarea__text">
                            <h3>Still You Need Our <span>Support</span> ?</h3>
                            <p>Don’t wait make a smart & logical quote here. Its pretty easy.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" data-aos="fade-up">
                        <div class="footerarea__newsletter">
                            <div class="footerarea__newsletter__input">
                                <form action="#">
                                    <input type="text" placeholder="Enter your email here">
                                    <div class="footerarea__newsletter__button">
                                        <a href="#">SUBSCRIBE NOW</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footerarea__wrapper footerarea__wrapper__2">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12" data-aos="fade-up">
                        <div class="footerarea__inner footerarea__about__us">
                            <div class="footerarea__heading">
                                <h3>About us</h3>
                            </div>
                            <div class="footerarea__content">
                                <p>orporate clients and leisure travelers has been relying on Groundlink for dependable safe, and professional chauffeured car end service in major cities across World.</p>
                            </div>
                            <div class="foter__bottom__text">
                                <div class="footer__bottom__icon">
                                    <i class="icofont-clock-time"></i>
                                </div>
                                <div class="footer__bottom__content">
                                    <h6>Opening Houres</h6>
                                    <span>Mon - Sat(8.00 - 6.00)</span>
                                    <span>Sunday - Closed</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2  col-md-6 col-sm-6" data-aos="fade-up">
                        <div class="footerarea__inner">
                            <div class="footerarea__heading">
                                <h3>Usefull Links</h3>
                            </div>
                            <div class="footerarea__list">
                                <ul>
                                    <li>
                                        <a href="#">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Teachers</a>
                                    </li>
                                    <li>
                                        <a href="#">Partner</a>
                                    </li>
                                    <li>
                                        <a href="#">Room-Details</a>
                                    </li>
                                    <li>
                                        <a href="#">Gallery</a>
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6" data-aos="fade-up">
                        <div class="footerarea__inner footerarea__padding__left">
                            <div class="footerarea__heading">
                                <h3>Course</h3>
                            </div>
                            <div class="footerarea__list">
                                <ul>
                                    <li>
                                        <a href="#">Ui Ux Design</a>
                                    </li>
                                    <li>
                                        <a href="#">Web Development</a>
                                    </li>
                                    <li>
                                        <a href="#">Business Strategy</a>
                                    </li>
                                    <li>
                                        <a href="#">Softwere Development</a>
                                    </li>
                                    <li>
                                        <a href="#">Business English</a>
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12" data-aos="fade-up">
                        <div class="footerarea__right__wraper footerarea__inner">
                            <div class="footerarea__heading">
                                <h3>Recent Post</h3>
                            </div>
                            <div class="footerarea__right__list">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="footerarea__right__img">
                                                <img src="{{ asset('asset/img') }}/footer/footer__1.png" alt="footerphoto">
                                            </div>
                                            <div class="footerarea__right__content">
                                                <span>02 Apr 2023 </span>
                                                <h6>Best Your Business</h6>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="footerarea__right__img">
                                                <img src="{{ asset('asset/img') }}/footer/footer__2.png" alt="footerphoto">
                                            </div>
                                            <div class="footerarea__right__content">
                                                <span>02 Apr 2023 </span>
                                                <h6>Keep Your Business</h6>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="footerarea__right__img">
                                                <img src="{{ asset('asset/img') }}/footer/footer__3.png" alt="footerphoto">
                                            </div>
                                            <div class="footerarea__right__content">
                                                <span>02 Apr 2023 </span>
                                                <h6>Nice Your Business</h6>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footerarea__copyright__wrapper footerarea__copyright__wrapper__2">
                <div class="row">
                    <div class="col-xl-3 col-lg-3">
                        <div class="copyright__logo">
                            <a href="/"><img src="{{ asset('asset/img') }}/logo/logo_2.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="footerarea__copyright__content footerarea__copyright__content__2">
                            <p>Copyright © <span>2023</span> by edurock. All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="footerarea__icon footerarea__icon__2">
                            <ul>
                                <li><a href="//facebook.com"><i class="icofont-facebook"></i></a></li>
                                <li><a href="//twitter.com"><i class="icofont-twitter"></i></a></li>
                                <li><a href="//vimeo.com"><i class="icofont-vimeo"></i></a></li>
                                <li><a href="//linkedin.com"><i class="icofont-linkedin"></i></a></li>
                                <li><a href="//skype.com"><i class="icofont-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- footer__section__end -->

</main>





<!-- JS here -->
<script src="{{ asset('asset/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{ asset('asset/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{ asset('asset/js/popper.min.js')}}"></script>
<script src="{{ asset('asset/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('asset/js/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('asset/js/slick.min.js')}}"></script>
<script src="{{ asset('asset/js/jquery.meanmenu.min.js')}}"></script>
<script src="{{ asset('asset/js/ajax-form.js')}}"></script>
<script src="{{ asset('asset/js/wow.min.js')}}"></script>
<script src="{{ asset('asset/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{ asset('asset/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{ asset('asset/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('asset/js/waypoints.min.js')}}"></script>
<script src="{{ asset('asset/js/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('asset/js/plugins.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="{{ asset('asset/js/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

</script>

@yield('page-footer-assets')

<script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
        document.getElementById("light--to-dark-button")?.classList.add("dark--mode");
    }
    if (localStorage.getItem("theme-color") === "light") {
        document.getElementById("light--to-dark-button")?.classList.remove("dark--mode");
    }
</script>
@include('frontend.master.master-script')
</body>

</html>










