<?php

namespace App\Http\Controllers\Frontend\Ecommerce;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('checkout');
    }

    /**
     * Display Chekout Page
    */
    public function checkout(): View
    {
        if (Auth::check()) {
            $user = Auth::user();
            $cart = Cart::where('user_id', $user->id)->get();
        } else {
            $userIp = \Request::ip();
            $cart = Cart::where('user_ip', $userIp)->get();
        }

        return view('frontend.ecommerce.checkout.checkout', compact('cart'));
    }
}
