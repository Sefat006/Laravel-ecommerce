<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;

class CategoryController extends Controller
{
    public function index(){
        $data = Page::where('slug', 'categories')->first();
        $categories = Category::all();
        return view('front.pages.categories', compact('categories', 'data'));
    }
}
