<?php

use App\Models\Category;
use App\Models\Compare;
use App\Models\Order;
use App\Models\Setting;
use App\Models\Stock;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

if (!function_exists('get_Settings')) {

    function get_Settings()
    {
        return Cache::remember('settings', 60 * 60, function () {
            return Setting::first(); // Get first row of settings
        });
    }
}


if (!function_exists('getCategoriesList')) {
    function getCategoriesList()
    {
        return Cache::remember('categories_list', 60, function () {

            return Category::where('status', 1)->orderBy('en_category_name', 'ASC')->limit(6)->get();
        });
    }
}

if (!function_exists('compareCount')) {

    function compareCount()
    {
        if (Auth::check()) {
            return Compare::where('user_id', Auth::id())->count();
        }

        return 0;
    }
}


if (!function_exists('wishlistCount')) {
    function wishlistCount()
    {
        if (Auth::check()) {
            return Wishlist::where('user_id', Auth::id())->count();
        }
        return 0;
    }
}



if (!function_exists('orderStatusCount')) {
    function orderStatusCount($status)
    {
        return Order::where('user_id', Auth::id())->where('order_status', $status)->count();
    }
}



if (!function_exists('getCurrentStock')) {
    function getCurrentStock($productId)
    {
        $stock_in = Stock::where('product_id', $productId)
            ->where('stock_type', 'in')
            ->sum('quantity');

        $stock_out = Stock::where('product_id', $productId)
            ->where('stock_type', 'out')
            ->sum('quantity');

        return $stock_in - $stock_out;
    }
}
