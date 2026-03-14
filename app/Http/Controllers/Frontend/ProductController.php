<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Gallery;
use App\Models\Order_item;
use App\Models\Page;
use App\Models\Product;
use App\Models\Size;
use GuzzleHttp\Psr7\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Show all products
        $data = Page::where('slug', 'products')->first();
        $categories = Category::where('status', 1)->get();
        $brands = Brand::where('status', 1)->get();
        $colors = Color::all();
        $sizes = Size::all();

        $query = Product::where('status', 1);

        if ($request->has('keywords') && !empty($request->keywords)) {
            $query->where('en_name', 'LIKE', '%' . $request->keywords . '%');
        }

        if ($request->has('category') && !empty($request->category)) {
            $query->where('category_id', $request->category);
        }

        // Price Range min
        if ($request->has('min_price') && !empty($request->min_price)) {
            $query->whereRaw(
                '(CASE 
            WHEN discounted_price IS NOT NULL 
            THEN discounted_price 
            ELSE price 
        END) >= ?',
                [$request->min_price]
            );
        }

        // Price Range Maximum
        if ($request->has('max_price') && !empty($request->max_price)) {
            $query->whereRaw(
                '(CASE 
            WHEN discounted_price IS NOT NULL 
            THEN discounted_price 
            ELSE price 
        END) <= ?',
                [$request->max_price]
            );
        }

        if ($request->has('brands') && !empty($request->brands)) {
            $brandsId = explode(',', $request->brands);
            $query->whereIn('brand_id', $brandsId);
        }

        $products = $query->paginate(6);

        return view('front.products.index', compact('data', 'categories', 'brands', 'products', 'colors', 'sizes'));
    }



    public function productDetails($slug)
    {
        $product = Product::with('colors')->with('sizes')->with('reviews')->where('slug', $slug)->where('status', 1)->first();

        $userHasPurchased = false;
        $userOrderId = null;
        if (Auth::check()) {
            $orderItem = Order_item::where('product_id', $product->id)->whereHas('order', function ($query) {
                $query->where('user_id', Auth::id());
            })->first();

            if ($orderItem) {
                $userHasPurchased = true;
                $userOrderId = $orderItem->order_id;
            }
        }

        $averageRating = $product->reviews->avg('rating') ?? 0;
        $averageRating = round($averageRating, 1); // Round to 1 decimal place




        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('status', 1)
            ->where('id', '!=', $product->id)
            ->latest()
            ->take(4) // show 4 related products
            ->get();
        $productImages = Gallery::where('product_id', $product->id)->get();
        return view('front.products.details', compact('product', 'userOrderId', 'relatedProducts', 'productImages', 'userHasPurchased','averageRating', ));
    }



    public function productsByCategory(Request $request, $slug)
    {
        $categories = Category::where('status', 1)->get();
        $brands = Brand::where('status', 1)->get();
        $colors = Color::all();
        $sizes = Size::all();

        $selectedCat = Category::where('status', 1)->where('slug', $slug)->first();

        $query = Product::where('status', 1)->where('category_id', $selectedCat->id);

        if ($request->has('keywords') && !empty($request->keywords)) {
            $query->where('en_name', 'LIKE', '%' . $request->keywords . '%');
        }

        if ($request->has('category') && !empty($request->category)) {
            $query->where('category_id', $request->category);
        }

        // Price Range min
        if ($request->has('min_price') && !empty($request->min_price)) {
            $query->whereRaw(
                '(CASE 
            WHEN discounted_price IS NOT NULL 
            THEN discounted_price 
            ELSE price 
        END) >= ?',
                [$request->min_price]
            );
        }

        // Price Range Maximum
        if ($request->has('max_price') && !empty($request->max_price)) {
            $query->whereRaw(
                '(CASE 
            WHEN discounted_price IS NOT NULL 
            THEN discounted_price 
            ELSE price 
        END) <= ?',
                [$request->max_price]
            );
        }

        if ($request->has('brands') && !empty($request->brands)) {
            $brandsId = explode(',', $request->brands);
            $query->whereIn('brand_id', $brandsId);
        }

        $products = $query->paginate(6);

        return view('front.products.bycategory', compact('categories', 'brands', 'products', 'selectedCat', 'colors', 'sizes'));
    }
}
