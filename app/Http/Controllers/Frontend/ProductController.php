<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Show all products
        // $products = Product::all();
        return view('front.products.index'); // this is the folder from resources/view/front/products/index.blade.html
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
