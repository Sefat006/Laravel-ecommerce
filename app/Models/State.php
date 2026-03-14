<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';

    protected $fillable = [
        'country_id',
        'name',
        'shipping_charge'
    ];

    // Relationship: State belongs to a Country
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
