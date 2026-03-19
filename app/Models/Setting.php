<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'site_name',
        'logo',
        'favicon',
        'address',
        'phone',
        'email',
        'fb',
        'twitter',
        'linkedin',
        'instagram',
        'copyright',
        'map_iframe',
        'meta_title',
        'meta_desc',
        'meta_keywords',
        'og_image',
    ];
}
