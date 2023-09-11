<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'slug',
        'product_code',
        'short_description',
        'product_category_id',
        'product_brand_id',
        'description',
        'thumbnail_image',
        'previous_price',
        'current_price',
        'purchase_price',
        'minimum_order_quantity',
        'privacy_policy',
        'return_policy',
        'affiliate_commission_type',
        'affiliate_commission',
    ];

    public function galleryImages()
    {
        return $this->hasMany(Gallery::class, 'product_id');
    }

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }


    public function stcoks(){
        return $this->hasMany(Stock::class);
    }
}
