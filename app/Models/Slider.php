<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    // Mass assignable fields
    protected $fillable = [
        'title',
        'subtitle',
        'image',
        'link',
        'description',
        'status',
    ];

    // Cast `status` as boolean for easier handling
    protected $casts = [
        'status' => 'boolean',
    ];
}
