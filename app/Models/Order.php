<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class );
    }

    public function billing()
    {
        return $this->hasOne(Billing::class);
    }

    public function orderDetails()
    {
        return  $this->hasMany(OrderDetail::class);
    }


    public static function getUniqueOrderNumber()
    {
        $prefix = 'ORD';
        $timestamp = now()->format('Ymd');
        $random = mt_rand(1000, 9999);

        $uniqueOrderNumber = $prefix . $timestamp . $random;

        return $uniqueOrderNumber;
    }

}
