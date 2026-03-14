<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderTrackingController extends Controller
{

    public function orderTracking($number){
        $order = Order::with('orderItems')->where('tracking_number', $number)->first();
        
        if(!$order){
            return redirect()->back()->with('error', 'Order is not Found ! Please check your tracking number');
        }
        
        return view('front.tracking.index', compact('order'));
    }

    
}
