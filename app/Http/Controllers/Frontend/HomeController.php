<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application Landing Page.
     */
    public function index():View
    {
        return view('frontend.home.home');
    }
}
