<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';

    protected $fillable = [
        'user_id',
        'size_id',
        'product_id',
        'quantity',
        'user_ip',
    ];

    /**
     * Return Cart and User relationship
    */
    public function product() {
        return $this->belongsTo(Product::class, 'product_id');
    }



    /**
     * Get total items in user cart
     */
    public static function totalItem()
    {
        $totalItem = 0;

        if (Auth::check()) {
            $user = Auth::user();
            $totalItem += Cart::where('user_id', $user->id)->count();
        } else {
            $user_ip = \Request::ip();
            $totalItem += Cart::where('user_ip', $user_ip)->count();
        }
        return $totalItem;
    }

    public static function carts()
    {
        if (Auth::check()) {
            $user = Auth::user();
             $carts = Cart::where('user_id', $user->id)->get();

        } else {
            $user_ip = \Request::ip();
             $carts = Cart::where('user_ip', $user_ip)->get();
        }

        return $carts;
    }

    public static function getCartTotalPrice()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $carts = Cart::where('user_id', $user->id)->get();
        } else {
            $user_ip = \Request::ip();
            $carts = Cart::where('user_ip', $user_ip)->get();
        }

        $total = 0;

        foreach ($carts as $cart) {
            $total += $cart->quantity * $cart->product->current_price;
        }

        return $total;
    }
}
