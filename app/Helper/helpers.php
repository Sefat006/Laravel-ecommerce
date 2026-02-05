<?php

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

if (!function_exists('get_Settings')) {

    function get_Settings()
    {
        return Cache::remember('settings', 60*60, function () {
            return Setting::first(); // Get first row of settings
        });
    }
}


if (!function_exists('getCategoriesList')) {
    function getCategoriesList()
    {
        return Cache::remember('categories_list', 60, function () {

            return Category::where('status', 1)->orderBy('en_category_name', 'ASC')->get();

        });
    }
}











?>