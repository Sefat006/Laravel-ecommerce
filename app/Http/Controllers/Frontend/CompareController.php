<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Compare;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompareController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Login is required.');
        }
        $user = Auth::user();
        $comparedProduct = Compare::where('user_id', $user->id)->with('product')->get();
        return view('front.compare.index', compact('comparedProduct'));
    }

    // Add a product to compare list (placeholder)
    public function addToCompare(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id'
        ]);
        $productId = $request->product_id;

        $user = Auth::user();

        // Check if product is already in compare list
        if (Compare::where('user_id', $user->id)->where('product_id', $productId )->exists()) {
            return response()->json(['success' => false, 'message' => 'This product is already in your compare list.']);
        }

        // Limit compare list to 2 products
        if (Compare::where('user_id', $user->id)->count() >= 2) {

            return response()->json(['success' => false, 'message' => 'You can only compare up to 2 products.']);
        }

        // Add to compare list
        Compare::create([
            'user_id' => $user->id,
            'product_id' =>$productId ,
        ]);

        return response()->json(['success'=> true, 'message'=> 'Product added to compare list.']);
    }

    // Remove a product from compare list (placeholder)
    public function remove($id)
    {
        $user = Auth::user(); 
        $compare = Compare::where('user_id', $user->id)->where('product_id', $id)->first();

        if ($compare) {
            $compare->delete(); // Delete the product from comparison
            return response()->json(['success' => true, 'message' => 'Product removed from comparison']);
        } else {
            return response()->json(['success' => false, 'message' => 'Product not found']);
        }
    }
}
