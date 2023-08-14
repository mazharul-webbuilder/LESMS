<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('guest');
//    }

    /**
     * Show the application Landing Page.
     */
    public function index():View
    {
        return view('frontend.home.home');
    }

    /**
     * Show the contact page from landing page
    */
    public function contact():View
    {
        return view('frontend.home.contact');
    }

    /**
     * Show the about page from landing page
    */
    public function about():View
    {
        return view('frontend.home.about');
    }
}
