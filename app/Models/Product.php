<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'brand_id',
        'en_name',
        'en_desc',
        'price',
        'quantity',
        'status',
    ];

    protected $guarded = [
        'id',
        'slug',
        'discounted_price',
    ];

    public function brand() {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // for product Details color and size variants
    // add these two on productController productDetails func using with();
    public function colors() {
        return $this->belongsToMany(Color::class, 'color_product', 'product_id');
    }
    public function sizes() {
        return $this->belongsToMany(Size::class, 'size_product', 'product_id');
    }
}
