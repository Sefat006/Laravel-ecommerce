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
        $color = $request->input('color'); // <-- add this
        $size = $request->input('size');   // <-- add this

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
                "id" => $product->id,
                "regularPrice" => $product->price,
                "discountedPrice" => $product->discounted_price,
                "image" => $product->thumb,
                "quantity" => $quantity,
                "color" => $color,
                "size" => $size,
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

    public function removeFromCart(Request $request)
    {
        // Retrieve cart from session
        $cart = session()->get('cart', []);

        // Get product ID from form input
        $product_id = $request->input('product_id');

        // Remove the product from the cart
        if (isset($cart[$product_id])) {
            unset($cart[$product_id]); // Remove item from array
            session()->put('cart', $cart); // Update session
        }

        // Redirect back with success message
        return redirect()->back()->with('success', 'Product removed from cart!');
    }

    // Increase Quantity
    public function increaseQuantity(Request $request)
    {
        $cart = session()->get('cart', []);
        $product_id = $request->input('product_id');

        if (isset($cart[$product_id])) {
            // Increase quantity by 1
            $cart[$product_id]['quantity']++;
            session()->put('cart', $cart);
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
    }

    // Decrease Quantity
    public function decreaseQuantity(Request $request)
    {
        $cart = session()->get('cart', []);
        $product_id = $request->input('product_id');

        if (isset($cart[$product_id])) {
            if ($cart[$product_id]['quantity'] > 1) {
                // Decrease quantity by 1
                $cart[$product_id]['quantity']--;
            } else {
                // Remove item from cart if quantity is 1
                unset($cart[$product_id]);
            }

            session()->put('cart', $cart);
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
    }

}
