@extends('admin.master.master')
@section('title')
    Admin Dashboard | {{ config('app.name') }}
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboards</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="bg-soft-primary">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-3">
                                        <h5 class="text-primary">Welcome !</h5>
                                        <p>Yeasin LESMS Admin Dashboard</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="{{ asset("backend/assets") }}/images/profile-img.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
{{--                        <div class="card-body pt-0">--}}
{{--                            <div class="row">--}}

{{--                                <div class="col-sm-8">--}}
{{--                                    <div class="pt-4">--}}

{{--                                        <div class="row">--}}
{{--                                            <div class="col-6">--}}
{{--                                                <h5 class="font-size-15">$1245</h5>--}}
{{--                                                <p class="text-muted mb-0">Revenue</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="mt-4">--}}
{{--                                            <a href="#" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ml-1"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Monthly Report</h4>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="text-muted">Total Order This month</p>
                                    <h3>{{getTotalOrderByMonth()}}</h3>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted">Total Sell This month</p>
                                    <h3>{{currency()}} {{getTotalSellByCurrentMonth()}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Yearly Report</h4>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="text-muted">Total Order This year</p>
                                    <h3>{{getTotalOrderByYear()}}</h3>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-muted">Total Sell This year</p>
                                    <h3>{{currency()}} {{getTotalSellByCurrentYear()}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted font-weight-medium">Total Orders</p>
                                            <h4 class="mb-0"> {{totalOrder()}}</h4>
                                        </div>

                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                            <span class="avatar-title">
                                                <i class="bx bx-copy-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted font-weight-medium">Today's Order</p>
                                            <h4 class="mb-0">{{todayTotalOrders()}}</h4>
                                        </div>

                                        <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="bx bx-archive-in font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted font-weight-medium">Today Sell</p>
                                            <h4 class="mb-0">{{currency()}}  {{getTodaySell()}}</h4>
                                        </div>

                                        <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div>
            </div>
            <!-- end row -->
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
@endsection

