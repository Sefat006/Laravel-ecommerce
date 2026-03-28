<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();        // Get all products
        $brands = Brand::latest()->get();            // Get all brands
        $categories = Category::latest()->get();     // Get all categories
        return view('admin.products.index', compact('products', 'brands', 'categories'));
    }

    public function create()
    {
        $brands = Brand::latest()->get();            // Get all brands
        $categories = Category::latest()->get();
        return view('admin.products.create', compact('brands', 'categories'));
    }



    public function store(Request $request)
    {
        // Validate inputs
        $request->validate([
            'en_name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'discounted_price' => 'nullable|numeric',
            'thumb' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'status' => 'required|boolean',
        ]);

        $product = new Product();

        // Basic info
        $product->en_name = $request->en_name;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->slug = Str::slug($request->en_name, '-');
        $product->en_desc = $request->en_desc;
        $product->en_shipping = $request->en_shipping;
        $product->en_additional_info = $request->en_additional_info;
        $product->price = $request->price;
        $product->discount = $request->discount ?? 0;
        $product->discounted_price = $request->discounted_price ?? $request->price;

        // Quantity default to 0
        $product->quantity = 0;

        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->meta_keywords = $request->meta_keywords;
        $product->status = $request->status;

        // Feature flags
        $product->is_featured = $request->has('is_featured') ? 1 : 0;
        $product->is_best_selling = $request->has('is_best_selling') ? 1 : 0;
        $product->is_new_arrival = $request->has('is_new_arrival') ? 1 : 0;
        $product->is_onsale = $request->has('is_onsale') ? 1 : 0;

        // Upload thumbnail
        if ($request->hasFile('thumb')) {
            $file = $request->file('thumb');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('front/assets/images/products'), $filename);
            $product->thumb = $filename;
        }

        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }



    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $brands = Brand::latest()->get();            // Get all brand
        $categories = Category::latest()->get();

        return view('admin.products.edit', compact('product', 'brands', 'categories'));
    }


    // Update product
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'category_id'       => 'required|exists:categories,id',
            'brand_id'          => 'required|exists:brands,id',
            'en_name'           => 'required|string|max:255',
            'thumb'             => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'en_desc'           => 'nullable|string',
            'price'             => 'required|numeric',
            'discount'          => 'nullable|numeric',
            'discounted_price'  => 'nullable|numeric',
            'status'            => 'required|boolean',
            'is_featured'       => 'nullable|boolean',
            'is_best_selling'   => 'nullable|boolean',
            'is_new_arrival'    => 'nullable|boolean',
            'is_onsale'         => 'nullable|boolean',
            'meta_title'        => 'nullable|string|max:255',
            'meta_description'  => 'nullable|string',
        ]);

        // Handle thumbnail upload
        $thumbName = $product->thumb;

        if ($request->hasFile('thumb')) {
            // Delete old thumbnail
            if ($product->thumb && file_exists(public_path('front/assets/images/products/' . $product->thumb))) {
                unlink(public_path('front/assets/images/products/' . $product->thumb));
            }

            $thumbName = time() . '.' . $request->thumb->extension();
            $request->thumb->move(public_path('front/assets/images/products'), $thumbName);
        }

        // Update product
        $product->update([
            'category_id'       => $request->category_id,
            'brand_id'          => $request->brand_id,
            'en_name'           => $request->en_name,
            'thumb'             => $thumbName,
            'en_desc'           => $request->en_desc,
            'en_shipping'       => $request->en_shipping ?? $product->en_shipping,
            'en_additional_info' => $request->en_additional_info ?? $product->en_additional_info,
            'price'             => $request->price,
            'discount'          => $request->discount ?? 0,
            'discounted_price'  => $request->discounted_price ?? 0,
            'status'            => $request->status,
            'is_featured'       => $request->has('is_featured') ? 1 : 0,
            'is_best_selling'   => $request->has('is_best_selling') ? 1 : 0,
            'is_new_arrival'    => $request->has('is_new_arrival') ? 1 : 0,
            'is_onsale'         => $request->has('is_onsale') ? 1 : 0,
            'meta_title'        => $request->meta_title,
            'meta_description'  => $request->meta_description,
            'meta_keywords'     => $request->meta_keywords,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Delete thumb
        if ($product->thumb && file_exists(public_path('front/assets/images/products/' . $product->thumb))) {
            unlink(public_path('front/assets/images/products/' . $product->thumb));
        }

        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }
}
