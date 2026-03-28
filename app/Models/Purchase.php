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

    public function SupplierName(){
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }

    public function purchaseItems(){
        return $this->hasMany(Purchase_item::class, 'purchase_id');
    }
}