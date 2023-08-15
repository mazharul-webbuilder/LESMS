<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    /**
     * Show Admin Login Page
    */
    public function login(): View
    {
        return view('admin.auth.login');
    }

    /**
     * Authenticate Admin
    */
    public function authenticate(AdminLoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->guard('admin')->attempt($credentials)) {
            return response()->json(['status' => true]);
        } else {
            return response()->json(['status' => false, 'message' => 'Invalid credentials']);
        }
    }

    /**
     * Logout Admin
    */
    public function logout(): RedirectResponse
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
    }
}
