<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';

    protected $fillable = [
        'name',
        'code',
        'tax_rate'
    ];

    // Relationship: One country has many states
    public function states()
    {
        return $this->hasMany(State::class);
    }
}
