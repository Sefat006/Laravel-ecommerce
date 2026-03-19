<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    // Table name (optional if it follows Laravel convention)
    protected $table = 'coupons';

    // The attributes that are mass assignable
    protected $fillable = [
        'code',
        'type',
        'discount_value',
        'expiry_date',
        'status',
    ];

    // The attributes that should be cast to native types
    protected $casts = [
        'discount_value' => 'decimal:2',
        'minimum_order_amount' => 'decimal:2',
        'expiry_date' => 'date',
        'status' => 'boolean',
    ];
}