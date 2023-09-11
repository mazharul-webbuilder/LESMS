<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','user_ip', 'product_id', 'quantity'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }


    public static function getNumberOfItemInWishlist()
    {
        if (isAuthenticUser()) {
            return Wishlist::where('user_id', Auth::id())->count();
        } else {
            return Wishlist::where('user_ip', Request::ip())->count();
        }
    }

    public static function getWishlist()
    {
        if (isAuthenticUser()) {
            return Wishlist::where('user_id', Auth::id()->get());
        } else {
            return Wishlist::where('user_ip', Request::ip())->get();
        }
    }
}
