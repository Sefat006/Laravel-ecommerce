<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_number',
        'supplier_id',
        'total_amount',
        'purchase_date',
        'notes',
    ];

    /**
     * Relationship: Purchase → Supplier
     */
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}