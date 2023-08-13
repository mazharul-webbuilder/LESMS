<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Admin Login | {{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset("backend/assets")}}/images/favicon.ico">
    <!-- Bootstrap Css -->
    <link href="{{ asset("backend/assets")}}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset("backend/assets")}}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset("backend/assets")}}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="home-btn d-none d-sm-block">
    <a href="{{route('home')}}" class="text-dark"><i class="fas fa-home h2"></i></a>
</div>
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-soft-primary">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Admin Dashboard !</h5>
                                    <p>Manage Yeasin Canvas</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="{{ asset("backend/assets")}}/images/profile-img.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div>
                            <a href="{{route('home')}}">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <img src="{{ asset("backend/assets")}}/images/logo.svg" alt="" class="rounded-circle" height="34">
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            <form class="form-horizontal" action="" method="POST">
{{--                                @if($errors->any())--}}
{{--                                    <div class="alert alert-danger">--}}
{{--                                        <ul>--}}
{{--                                            @foreach($errors->all() as $error)--}}
{{--                                                <li>{{$error}}</li>--}}
{{--                                            @endforeach--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                @endif--}}
                                @if(Session::has('warning'))
                                    <div class="alert alert-danger text-center">
                                        {{Session::get('warning')}}
                                    </div>
                                @endif
                                @csrf
                                <div class="form-group">
                                    <label for="username">Email</label>
                                    <input type="email" name="email" value="{{old('email')}}" class="form-control" id="username" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <input type="password" name="password" class="@error('password') is-invalid @enderror form-control" id="userpassword" placeholder="Enter password">
{{--                                    @error('password')--}}
{{--                                    <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                                    @enderror--}}
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="rememberMe" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JAVASCRIPT -->
<script src="{{ asset("backend/assets")}}/libs/jquery/jquery.min.js"></script>
<script src="{{ asset("backend/assets")}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset("backend/assets")}}/libs/metismenu/metisMenu.min.js"></script>
<script src="{{ asset("backend/assets")}}/libs/simplebar/simplebar.min.js"></script>
<script src="{{ asset("backend/assets")}}/libs/node-waves/waves.min.js"></script>

<!-- App js -->
<script src="{{ asset("backend/assets")}}/js/app.js"></script>
</body>

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 15:08:04 GMT -->
</html>
