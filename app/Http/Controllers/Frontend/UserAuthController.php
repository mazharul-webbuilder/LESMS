<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show User Registration Form
    */
    public function register(): View
    {
        return view('frontend.auth.register');
    }

    /**
     * Store User Registration Data
    */
    public function registerPost(): RedirectResponse
    {
        return \redirect()->route('user.dashboard');
    }

    /**
     * Show User Login Form
    */
    public function login(): View
    {
        return view('frontend.auth.login');
    }

    /**
     * Authenticate Incoming User Login Request
    */
    public function authenticate(): RedirectResponse
    {
        return \redirect()->route('user.dashboard');
    }

    /**
     * Logout User
    */
    public function logout(): RedirectResponse
    {
        return \redirect()->route('login');
    }


}
