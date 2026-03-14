<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'product_name',
        'color',
        'size',
        'quantity',
        'price',
        'total',
        'thumb',
    ];

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    // OrderItem belongs to Order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // OrderItem belongs to Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
