<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'en_category_name',
        'slug',
        'icon',
        'desc',
        'status',
        'en_short_info', 
    ];

    /**
     * The attributes that should be cast to native types.
     */
    protected $casts = [
        'status' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}