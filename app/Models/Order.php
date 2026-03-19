<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function orderItems()
    {
        return $this->hasMany(Order_item::class);
    }

    public function ShippingCountry()
    {
        return $this->belongsTo(Country::class, 'shipping_country');
    }

    public function BillingCountry()
    {
        return $this->belongsTo(Country::class, 'billing_country');
    }


    public function ShippingState()
    {
        return $this->belongsTo(State::class, 'shipping_state');
    }

    public function BillingState()
    {
        return $this->belongsTo(State::class, 'billing_state');
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
