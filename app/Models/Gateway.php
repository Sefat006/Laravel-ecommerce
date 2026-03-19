<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gateway extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'credentials',
        'status',
    ];

    protected $casts = [
        'credentials' => 'array', // ✅ auto JSON ↔ array
        'status' => 'boolean',
    ];
}
