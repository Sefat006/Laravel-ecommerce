<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deliveryman_notification extends Model
{
    protected $fillable = [
        'deliveryman_id',
        'order_id',
        'message',
        'is_read',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function deliveryman()
    {
        return $this->belongsTo(User::class, 'deliveryman_id');
    }
}
