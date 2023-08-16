<?php

namespace App\Http\Controllers\Backend\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductBrandController extends Controller
{
    /**
     * Show Product Brands Manage Page
    **/
    public function brands(): View
    {
        return view('admin.ecommerce.brand.brands');
    }
}
