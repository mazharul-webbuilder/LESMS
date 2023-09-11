<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBrand extends Model
{
    use HasFactory;
    protected $guarded=[];

    protected $fillable = ['name', 'slug', 'slogan', 'logo', 'status',];

    public function product_brands()
    {
        return $this->hasMany(BrandCategory::class,'product_brand_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function categories()
    {
        return $this->belongsToMany(ProductCategory::class, 'brand_categories', 'product_brand_id', 'product_category_id');
    }




}
