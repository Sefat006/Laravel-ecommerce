<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Stock;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('front.cart.index');
    }

    // Add product to cart (placeholder)
    public function addToCart(Request $request)
    {

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

        // Calculate current stock directly from stock table
        $stock_in = Stock::where('product_id', $product_id)->where('stock_type', 'in')->sum('quantity');
        $stock_out = Stock::where('product_id', $product_id)->where('stock_type', 'out')->sum('quantity');
        $current_stock = $stock_in - $stock_out;

        $existing_quantity = isset($cart[$product_id]) ? $cart[$product_id]['quantity'] : 0;

        // Total quantity if adding 1 more
        $new_quantity = $existing_quantity + $quantity;

        if ($new_quantity > $current_stock) {
            return response()->json([
                'status' => 'error',
                'message' => 'Only ' . $current_stock . ' items in stock. Cannot add more to cart.'
            ]);
        }

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

        // ✅ Get current cart quantity
        $current_quantity = $cart[$product_id]['quantity'];

        // ✅ Calculate current stock from stock table
        $stock_in = Stock::where('product_id', $product_id)->where('stock_type', 'in')->sum('quantity');
        $stock_out = Stock::where('product_id', $product_id)->where('stock_type', 'out')->sum('quantity');
        $current_stock = $stock_in - $stock_out;

        if ($current_quantity >= $current_stock) {
            return response()->json([
                'success' => false,
                'message' => 'Cannot increase quantity. Only ' . $current_stock . ' items in stock.'
            ]);
        }

        // ✅ Increase quantity
        $cart[$product_id]['quantity']++;
        session()->put('cart', $cart);

        return response()->json([
            'success' => true,
            'message' => 'Product added to cart!'
        ]);
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
