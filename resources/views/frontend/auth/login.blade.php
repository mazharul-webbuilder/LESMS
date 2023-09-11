@extends('frontend.master.master')
@section('title')
    Login | {{ config('app.name') }}
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
                                <li><a href="{{route('home')}}">Home</a></li>
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
                                </div>

                                <form action="{{route('login')}}" method="POST">
                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @csrf
                                    <div class="login__form">
                                        <label class="form__label">Email</label>
                                        <input class="common__login__input" type="email" name="email" placeholder="Your email">
                                    </div>
                                    <div class="login__form">
                                        <label class="form__label">Password</label>
                                        <input class="common__login__input" type="password" name="password" placeholder="Password">

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
                                        <input type="submit" class="w-100 default__button" value="Log In">
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



                                <form action="{{route('register')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">First Name*</label>
                                                <input class="@error('first_name') invalid-request @enderror common__login__input" value="{{old('first_name')}}" name="first_name" type="text" placeholder="First Name">
                                                @error('first_name')
                                                @include('common.show-validation-error-msg')
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">Last Name*</label>
                                                <input class="@error('last_name') invalid-request @enderror common__login__input" name="last_name" value="{{old('last_name')}}" type="text" placeholder="Last Name">
                                                @error('last_name')
                                                @include('common.show-validation-error-msg')
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">Email*</label>
                                                <input class="@error('email') invalid-request @enderror common__login__input" value="{{old('email')}}" name="email" type="email" placeholder="Your Email">
                                                @error('email')
                                                @include('common.show-validation-error-msg')
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">Phone</label>
                                                <input class="@error('phone') invalid-request @enderror common__login__input" value="{{old('phone')}}" name="phone" type="text" placeholder="Ex: 01638574281">
                                                @error('phone')
                                                @include('common.show-validation-error-msg')
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xl-12">
                                            <div class="login__form">
                                                <label class="form__label">Referral Code</label>
                                                <input class="@error('referral_code') invalid-request @enderror common__login__input" value="{{old('referral_code')}}" name="referral_code" type="text" placeholder="Ex: R15836975">
                                                @error('referral_code')
                                                @include('common.show-validation-error-msg')
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">Password*</label>
                                                <input class="@error('password') invalid-request @enderror  common__login__input" name="password" type="password" placeholder="Password">
                                                @error('password')
                                                @include('common.show-validation-error-msg')
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="login__form">
                                                <label class="form__label">Re-Enter Password*</label>
                                                <input class="@error('password_confirmation') invalid-request @enderror common__login__input" name="password_confirmation" type="password" placeholder="Re-Enter Password">
                                                @error('password_confirmation')
                                                @include('common.show-validation-error-msg')
                                                @enderror

                                            </div>
                                        </div>
                                    </div>

                                    <div class="login__form d-flex justify-content-between flex-wrap gap-2">
                                        <div class="form__check">
                                            <input id="accept_pp"
                                                   name="terms_condition"
                                                   type="checkbox" required>
                                            <label for="accept_pp">Accept the Terms and Privacy Policy*</label>
                                        </div>

                                    </div>
                                    <div class="login__button">
                                        <input type="submit" class="default__button w-100" value="Sign Up">
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
