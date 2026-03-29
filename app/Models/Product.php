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
        'thumb',
        'slug',
        'en_desc',
        'en_shipping',
        'en_additional_info',
        'is_featured',
        'is_best_selling',
        'is_new_arrival',
        'is_onsale',
        'price',
        'discount',
        'discounted_price',
        'quantity',
        'delivery_duration',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status',
    ];

    protected $guarded = [
        'id',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // for product Details color and size variants
    // add these two on productController productDetails func using with();
    public function colors()
    {
        return $this->belongsToMany(Color::class, 'color_product', 'product_id');
    }
    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'size_product', 'product_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id');
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class, 'product_id');
    }
}
