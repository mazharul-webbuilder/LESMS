<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandCategory extends Model
{
    use HasFactory;

    protected $guarded = [];



    public function category(){
        return $this->belongsTo(ProductCategory::class,'product_category_id');
    }
    public function brand(){
        return $this->belongsTo(ProductBrand::class,'product_brand_id');
    }

}
