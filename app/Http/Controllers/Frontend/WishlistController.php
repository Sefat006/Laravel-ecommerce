<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Login is required.');
        }
        $user = Auth::user();
        $wishlistProducts = Wishlist::where('user_id', $user->id)->with('product')->get();
        return view('front.wishlist.index', compact('wishlistProducts'));
    }

    // Add a product to wishlist (placeholder)
    public function addToWishlist(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id'
        ]);
        $productId = $request->product_id;
        
        $user = Auth::user();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'You need to login first'
            ], 401);
        }

        // Check if product already in wishlist
        $exists = Wishlist::where('user_id', $user->id)
            ->where('product_id', $productId )
            ->first();

        if ($exists) {
            return response()->json([
                'success' => false,
                'message' => 'Product already in wishlist'
            ]);
        }

        // Add to wishlist
        Wishlist::create([
            'user_id' => $user->id,
            'product_id' => $productId
        ]);

        return response()->json(['success' => true, 'message' => 'Product added to wishlist']);
    }

   public function remove($id)
    {
        $user = Auth::user(); 
        $wishlist = Wishlist::where('user_id', $user->id)->where('product_id', $id)->first();

        if ($wishlist) {
            $wishlist->delete(); // Delete the product from comparison
            return response()->json(['success' => true, 'message' => 'Product removed from wishlist']);
        } else {
            return response()->json(['success' => false, 'message' => 'Product not found']);
        }
    }
}


