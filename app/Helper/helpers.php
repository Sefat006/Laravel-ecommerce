<?php

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












?>