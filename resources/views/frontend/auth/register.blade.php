@extends('frontend.master.master')
@section('title')
    Login
@endsection
@section('content')
    <!-- breadcrumbarea__section__start -->

    <div class="breadcrumbarea">

        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__content__wraper" data-aos="fade-up">
                        <div class="breadcrumb__title">
                            <h2 class="heading">Log In</h2>
                        </div>
                        <div class="breadcrumb__inner">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Log In</li>
                            </ul>
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <div class="shape__icon__2">
            <img class=" shape__icon__img shape__icon__img__1" src="{{ asset("asset/img")}}/herobanner/herobanner__1.png" alt="photo">
            <img class=" shape__icon__img shape__icon__img__2" src="{{ asset("asset/img")}}/herobanner/herobanner__2.png" alt="photo">
            <img class=" shape__icon__img shape__icon__img__3" src="{{ asset("asset/img")}}/herobanner/herobanner__3.png" alt="photo">
            <img class=" shape__icon__img shape__icon__img__4" src="{{ asset("asset/img")}}/herobanner/herobanner__5.png" alt="photo">
        </div>

    </div>
    <!-- breadcrumbarea__section__end-->

    <!-- login__section__start -->
    <div class="loginarea sp_top_100 sp_bottom_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 offset-md-2" data-aos="fade-up">
                    <ul class="nav  tab__button__wrap text-center" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="single__tab__link active" data-bs-toggle="tab" data-bs-target="#projects__one" type="button">Login</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="single__tab__link" data-bs-toggle="tab" data-bs-target="#projects__two" type="button">Sing up</button>
                        </li>
                    </ul>
                </div>


                <div class="tab-content tab__content__wrapper" id="myTabContent" data-aos="fade-up">

                    <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                        <div class="col-xl-8 col-md-8 offset-md-2">
                            <div class="loginarea__wraper">
                                <div class="login__heading">
                                    <h5 class="login__title">Login</h5>
                                    <p class="login__description">Don't have an account yet? <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Sign up for free</a></p>
                                </div>



                                <form action="#">
                                    <div class="login__form">
                                        <label class="form__label">Username or email</label>
                                        <input class="common__login__input" type="text" placeholder="Your username or email">

                                    </div>
                                    <div class="login__form">
                                        <label class="form__label">Password</label>
                                        <input class="common__login__input" type="password" placeholder="Password">

                                    </div>
                                    <div class="login__form d-flex justify-content-between flex-wrap gap-2">
                                        <div class="form__check">
                                            <input id="forgot" type="checkbox">
                                            <label for="forgot"> Remember me</label>
                                        </div>
                                        <div class="text-end login__form__link">
                                            <a href="#">Forgot your password?</a>
                                        </div>
                                    </div>
                                    <div class="login__button">
                                        <a class="default__button" href="#">Log In</a>
                                    </div>
                                </form>

                                <div class="login__social__option">
                                    <p>or Log-in with</p>

                                    <ul class="login__social__btn">
                                        <li><a class="default__button login__button__1" href="#"><i class="icofont-facebook"></i> Gacebook</a></li>
                                        <li><a class="default__button" href="#"><i class="icofont-google-plus"></i> Google</a></li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="projects__two" role="tabpanel" aria-labelledby="projects__two">
                        <div class="col-xl-8 offset-md-2">
                            <div class="loginarea__wraper">
                                <div class="login__heading">
                                    <h5 class="login__title">Sing Up</h5>
                                    <p class="login__description">Already have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Log In</a></p>
                                </div>



                                <form action="#">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">First Name</label>
                                                <input class="common__login__input" type="text" placeholder="First Name">

                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">Last Name</label>
                                                <input class="common__login__input" type="password" placeholder="Last Name">

                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">Username</label>
                                                <input class="common__login__input" type="password" placeholder="Username">

                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">Email</label>
                                                <input class="common__login__input" type="password" placeholder="Your Email">

                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">Password</label>
                                                <input class="common__login__input" type="password" placeholder="Password">

                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">Re-Enter Password</label>
                                                <input class="common__login__input" type="password" placeholder="Re-Enter Password">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="login__form d-flex justify-content-between flex-wrap gap-2">
                                        <div class="form__check">
                                            <input id="accept_pp" type="checkbox"> <label for="accept_pp">Accept the Terms and Privacy Policy</label>
                                        </div>

                                    </div>
                                    <div class="login__button">
                                        <a class="default__button" href="#">Log In</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class=" login__shape__img educationarea__shape_image">
                <img class="hero__shape hero__shape__1" src="{{ asset("asset/img")}}/education/hero_shape2.png" alt="Shape">
                <img class="hero__shape hero__shape__2" src="{{ asset("asset/img")}}/education/hero_shape3.png" alt="Shape">
                <img class="hero__shape hero__shape__3" src="{{ asset("asset/img")}}/education/hero_shape4.png" alt="Shape">
                <img class="hero__shape hero__shape__4" src="{{ asset("asset/img")}}/education/hero_shape5.png" alt="Shape">
            </div>


        </div>
    </div>

    <!-- login__section__end -->
@endsection
