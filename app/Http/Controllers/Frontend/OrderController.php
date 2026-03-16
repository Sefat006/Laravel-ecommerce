<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;



class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store(Request $request)
{
    // Validate the request
    $validatedData = $request->validate([
        'shipping_name'           => 'required|string|max:100',
        'shipping_email'          => 'required|email|max:100',
        'shipping_street_address' => 'required|string',
        'shipping_country'        => 'required|string|max:100',
        'shipping_state'          => 'required|string|max:100',
        'shipping_zipcode'        => 'required|string|max:20',

        'payment' => 'required|in:cod,bank,paypal,creditcard,razorpay,sslcommerz',

        'billing_name'           => $request->has('copy_address') ? 'required|string|max:255' : 'nullable',
        'billing_email'          => $request->has('copy_address') ? 'required|email|max:255'  : 'nullable',
        'billing_street_address' => $request->has('copy_address') ? 'required|string|max:255' : 'nullable',
        'billing_country'        => $request->has('copy_address') ? 'required|string|max:100' : 'nullable',
        'billing_state'          => $request->has('copy_address') ? 'required|string|max:100' : 'nullable',
        'billing_zipcode'        => $request->has('copy_address') ? 'required|string|max:20'  : 'nullable',
    ]);

    // Map form payment values → DB enum values
    // 'cod','bank','paypal','creditcard','razorpay','sslcommerz'
    $paymentMap = [
        'cod'        => 'cod',
        'bank'       => 'bank',
        'creditcard' => 'creditcard',
        'paypal'     => 'paypal',
        'razorpay'   => 'creditcard',   // map to nearest enum or extend migration
        'sslcommerz' => 'creditcard',   // same — or extend migration (see Fix 2)
    ];
    $paymentMethod = $paymentMap[$request->payment] ?? 'cod';

    // Payment status logic (fixed the || bug — should be &&)
    $offlinePayments = ['cod', 'bank'];
    $paymentStatus = in_array($paymentMethod, $offlinePayments) ? 'pending' : 'paid';

    try {
        $orderNumber = 'ORD-' . strtoupper(Str::random(10));

        $discount = session('coupon.discount', 0);
        $tax      = session('tax.tax_rate', 0);
        $shipping = session('shipping.shipping_charge', 0);

        $subTotal   = collect(session('cart', []))->sum(fn($item) => ($item['discountedPrice'] ?? $item['regularPrice']) * $item['quantity']);
        $grandTotal = $subTotal - $discount + $tax + $shipping;

        $order = Order::create([
            'user_id'      => Auth::id(),
            'order_number' => $orderNumber,

            // Shipping
            'shipping_name'           => $request->shipping_name,
            'shipping_email'          => $request->shipping_email,
            'shipping_street_address' => $request->shipping_street_address,
            'shipping_country'        => $request->shipping_country,
            'shipping_state'          => $request->shipping_state,
            'shipping_zipcode'        => $request->shipping_zipcode,

            // Billing: if checkbox checked use billing fields, else copy from shipping
            'billing_name'           => $request->has('copy_address') ? $request->billing_name           : $request->shipping_name,
            'billing_email'          => $request->has('copy_address') ? $request->billing_email          : $request->shipping_email,
            'billing_street_address' => $request->has('copy_address') ? $request->billing_street_address : $request->shipping_street_address,
            'billing_country'        => $request->has('copy_address') ? $request->billing_country        : $request->shipping_country,
            'billing_state'          => $request->has('copy_address') ? $request->billing_state          : $request->shipping_state,
            'billing_zipcode'        => $request->has('copy_address') ? $request->billing_zipcode        : $request->shipping_zipcode,

            'total_amount'   => $grandTotal,
            'payment_method' => $paymentMethod,
            'payment_status' => $paymentStatus,
            'order_status'   => 'pending',
        ]);

    } catch (\Exception $e) {
        Log::error('Order placement failed: ' . $e->getMessage(), ['exception' => $e]);
        return redirect()->back()->with('error', 'Order placement failed. Please try again.');
    } finally {
        session()->forget(['cart', 'coupon', 'tax', 'shipping']);
    }

    return redirect()->route('checkout.success')->with('success', 'Your order has been placed!');
}

    public function success(){
        return view('front.checkout.success');
    }


    public function invoice($id){
        $order = Order::with('orderItems')->where('id', $id)->first();
        if(!$order){
            abort(404);
        }
        return view('front.invoice.index', compact('order'));
    }
}
