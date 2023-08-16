<?php

namespace App\Http\Controllers\Backend\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function categories(): View
    {
        return view('admin.ecommerce.category.categories');    // returns
    }
}
