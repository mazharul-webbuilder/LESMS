<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    public function product_categories()
    {
        return $this->hasMany(BrandCategory::class,'product_category_id');
    }


}
