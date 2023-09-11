<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $table = 'product_categories';

    protected $fillable = ['name', 'slug', 'title', 'image', 'status'];

    public function product_categories()
    {
        return $this->hasMany(BrandCategory::class,'product_category_id');
    }

    public function product_brands()
    {
        return $this->hasMany(BrandCategory::class, 'product_brand_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }



}
