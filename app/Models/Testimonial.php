<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    // Fillable fields for mass assignment
    protected $fillable = [
        'name',
        'image',
        'review',
        'status',
    ];

    // Default attribute values
    protected $attributes = [
        'status' => 1,          // default status
        'image' => 'images/avatar.jpg', // default image if none provided
    ];

    // Casts if needed
    protected $casts = [
        'status' => 'boolean', // treat tinyint as boolean
    ];
}
