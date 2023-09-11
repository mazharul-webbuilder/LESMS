<?php

namespace App\Services;

use App\Models\Cart;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontEndMasterService
{
    public function getCategories(): Collection
    {
        return ProductCategory::all();
    }

}
