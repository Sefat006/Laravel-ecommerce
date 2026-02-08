<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Gallery;
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
    
    public function productDetails($slug)
    {
        // Show single product
        $product = Product::where('slug', $slug)->where('status', 1)->first();

        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('status', 1)
            ->where('id', '!=', $product->id)
            ->latest()
            ->take(4) // show 4 related products
            ->get();
        $productImages = Gallery:: where('product_id', $product->id)->get();
        return view('front.products.details', compact('product', 'relatedProducts', 'productImages'));
    }

    // public function create()
    // {
    //     // Show create product form (if needed)
    // }

    // public function store(Request $request)
    // {
    //     // Save new product
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
