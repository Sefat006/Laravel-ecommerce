<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Page;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Show all products
        $data = Page::where('slug','products')->first();
        $categories = Category::where('status', 1)->get();
        $brands = Brand::where('status', 1)->get();
        $products = Product::where('status', 1)->latest()->paginate(6);
        return view('front.products.index', compact('categories', 'brands', 'products', 'data')); // this is the folder from resources/view/front/products/index.blade.html
    }

    // public function create()
    // {
    //     // Show create product form (if needed)
    // }

    // public function store(Request $request)
    // {
    //     // Save new product
    // }

    // public function show($id)
    // {
    //     // Show single product
    //     $product = Product::findOrFail($id);
    //     return view('front.product.show', compact('product'));
    // }

    // public function edit($id)
    // {
    //     // Show edit form
    // }

    // public function update(Request $request, $id)
    // {
    //     // Update product
    // }

    // public function destroy($id)
    // {
    //     // Delete product
    //     Product::destroy($id);
    //     return redirect()->back()->with('success', 'Product deleted!');
    // }
}
