<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'stock_type',
        'quantity',
        'reference_type',
        'reference_id',
        'note',
    ];

    /**
     * Stock → Product
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}