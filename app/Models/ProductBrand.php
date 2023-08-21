<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBrand extends Model
{
    use HasFactory;
    protected $guarded=[];

    protected $fillable = ['name', 'slug', 'slogan', 'logo'];

    public function product_brands()
    {
        return $this->hasMany(BrandCategory::class,'product_brand_id');
    }


}
