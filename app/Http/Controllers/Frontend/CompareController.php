<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompareController extends Controller
{
    public function index()
    {
        return view('front.compare.index');
    }

    // Add a product to compare list (placeholder)
    public function add(Request $request)
    {
        // TODO: Add logic to save product in compare list
        return response()->json(['message' => 'Added to compare']);
    }

    // Remove a product from compare list (placeholder)
    public function remove($id)
    {
        // TODO: Add logic to remove product from compare list
        return response()->json(['message' => 'Removed from compare']);
    }
}
