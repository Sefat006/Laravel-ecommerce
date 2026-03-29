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
    public function productName()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }


    public function purchase()
    {
        return $this->belongsTo(Purchase::class, 'reference_id');
    }

    /**
     * Accessor: only return purchase if reference_type is 'purchase'
     */
    public function getPurchaseNameAttribute()
    {
        return $this->reference_type === 'purchase' ? $this->purchase : null;
    }


    public function getStockDateAttribute()
    {
        return $this->created_at ? $this->created_at->format('d-m-Y H:i') : null;
    }
}
