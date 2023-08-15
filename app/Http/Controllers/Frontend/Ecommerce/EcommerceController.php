<?php

namespace App\Http\Controllers\Frontend\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class EcommerceController extends Controller
{
    /**
     * View Ecommerce Products Page
     */
    public function index(): View
    {
        return view('frontend.ecommerce.products');
    }
}
