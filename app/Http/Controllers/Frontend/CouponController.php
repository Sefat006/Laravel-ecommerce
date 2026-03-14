<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;


class CouponController extends Controller
{
    public function applyCoupon(Request $request)
    {
        $couponCode = $request->coupon_code;
        $coupon = Coupon::where('code', $couponCode)->where('status', 1)->first();

        if (!$coupon) {
            return response()->json(['success' => false, 'message' => 'Invalid or expired coupon']);
        }

        // Get Subtotal from Session
        $subtotal = collect(session('cart', []))->sum(fn($item) => ($item['discountedPrice'] ?? $item['price']) * $item['quantity']);

        // Apply Coupon Discount
        if ($coupon->type === 'fixed') {
            $discount = (float) $coupon->discount_value; 
        } else { // percentage discount
            $discount = ($subtotal * (float) $coupon->discount_value) / 100;
        }

        // assing value to session
        session()->put('coupon', ['code' => $coupon->code, 'discount' => $discount,]);

        return response()->json([
            'success' => true,
            'message' => 'Coupon applied successfully!',
            'discount' => $discount
        ]);
    }
}
