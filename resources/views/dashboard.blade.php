@extends('frontend.master.master')
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="container py-5">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">My Profile</h5>
                        <p class="card-text">Welcome, {{ucfirst(\Illuminate\Support\Facades\Auth::user()->full_name)}}!</p>
                        <a href="#" class="btn" style="background-color: #5f2ded; color: whitesmoke;">View Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">My Orders</h5>
                        <p class="card-text">You have {{\App\Models\Order::where('user_id', \Illuminate\Support\Facades\Auth::user()->id)->count()}} pending orders.</p>
                        <a href="#" class="btn" style="background-color: #5f2ded; color: whitesmoke;">View Orders</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Settings</h5>
                        <p class="card-text">Update your account settings.</p>
                        <a href="#" class="btn" style="background-color: #5f2ded; color: whitesmoke;">Edit Settings</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
