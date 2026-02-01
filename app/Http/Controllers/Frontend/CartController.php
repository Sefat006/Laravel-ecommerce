<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('front.cart.index');
    }

    // Add product to cart (placeholder)
    public function add(Request $request)
    {
        // TODO: Add logic to add product to cart
        return response()->json(['message' => 'Added to cart']);
    }

    // Remove product from cart (placeholder)
    public function remove($id)
    {
        // TODO: Add logic to remove product from cart
        return response()->json(['message' => 'Removed from cart']);
    }
}
