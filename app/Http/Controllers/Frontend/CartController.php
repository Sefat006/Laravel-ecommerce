<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('front.cart.index');
    }

    // Add product to cart (placeholder)
    public function addToCart(Request $request){

        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity', 1);

        $product = Product::find($product_id);

        if (!$product) {
            return response()->json(['status' => 'error', 'message' => 'Product 
                not found!']);
        }

        // Get cart from session
        $cart = session()->get('cart', []);

        if (isset($cart[$product_id])) {
            $cart[$product_id]['quantity'] += $quantity;
        } else {
            $cart[$product_id] = [
                "name" => $product->en_name,
                "regularPrice" => $product->price,
                "discountedPrice" => $product->discounted_price,
                "image" => $product->thumb,
                "quantity" => $quantity
            ];
        }

        // Store cart in session
        session()->put('cart', $cart);

        // ✅ Get updated cart count
        $cartCount = count($cart);

        // ✅ Calculate total price
        $totalPrice = collect($cart)->sum(fn($item) => $item['discountedPrice'] * $item['quantity']);

        return response()->json([
            'status' => 'success',
            'cart_count' => $cartCount,
            'total_price' => number_format($totalPrice, 2)
        ]);

    }

}
