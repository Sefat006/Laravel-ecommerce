<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{

    public function store(Request $request)
    {
        // dd($request->all());
        // 1. Validate the incoming request data
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'order_id' => 'required',
            'rating'     => 'required|integer|min:1|max:5',
            'review'     => 'required|string|min:10',
        ]);

        // 2. Check if the user is logged in
        if (!Auth::check()) {
            return back()->with('error', 'You do not have permission!');
        }

        // 3. Check if the user has already submitted a review for this product
        $existingReview = Review::where('user_id', Auth::id())
            ->where('product_id', $request->product_id)
            ->exists();

        if ($existingReview) {
            return back()->with('error', 'You have already reviewed this product.');
        }

        // 4. Insert the new review into the database
        Review::create([
            'user_id'    => Auth::id(),
            'product_id' => $request->product_id,
            'order_id'   => $request->order_id,
            'rating'     => $request->rating,
            'review'     => $request->review,
        ]);

        // 5. Redirect back with a success message
        return back()->with('success', 'Your review has been submitted!');
    }
}
