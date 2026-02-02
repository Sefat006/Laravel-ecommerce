<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function index()
    {
        return view('front.subscribe.index');
    }

    // Handle subscription (placeholder)
    public function store(Request $request)
    {
        // TODO: Add logic to save subscriber email
        return response()->json(['message' => 'Subscribed successfully']);
    }
}
