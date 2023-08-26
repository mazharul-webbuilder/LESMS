<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stock extends Model
{
    use HasFactory;

    protected $table = 'stocks';

    protected $fillable = [
        'product_id',
        'quantity',
        'size_id'
    ];


    /**
     * Return relationship between sizes and stocks table
    */
    public function size(): BelongsTo
    {
        return $this->belongsTo(Size::class);
    }


    /**
     * Return relationship between products and stocks table
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
