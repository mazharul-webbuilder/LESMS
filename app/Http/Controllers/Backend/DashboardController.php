<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('admin');
//    }

    /**
     * Show Admin Dashboard
    */
    public function dashboard(): View
    {
        return view('admin.dashboard.dashboard');
    }
}
