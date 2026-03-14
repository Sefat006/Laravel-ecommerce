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

        // dd($request);
        // Validate the request
        $validatedData = $request->validate([

            // Shipping Details (usually required unless you have logic to use billing if empty)
            'shipping_name'           => 'required|string|max:100',
            'shipping_email'          => 'required|email|max:100',
            'shipping_street_address' => 'required|string',
            'shipping_country'        => 'required|string|max:100',
            'shipping_state'          => 'required|string|max:100',
            'shipping_zipcode'        => 'required|string|max:20',

            // Order Details
            'payment' => 'required|in:cod,bank,paypal,creditcard,razorpay,sslcommerz',


            'billing_name'           => $request->has('copy_address') ? 'required|string|max:255' : 'nullable',
            'billing_email'          => $request->has('copy_address') ? 'required|email|max:255'  : 'nullable',
            'billing_street_address' => $request->has('copy_address') ? 'required|string|max:255' : 'nullable',
            'billing_country'        => $request->has('copy_address') ? 'required|string|max:100' : 'nullable',
            'billing_state'          => $request->has('copy_address') ? 'required|string|max:100' : 'nullable',
            'billing_zipcode'        => $request->has('copy_address') ? 'required|string|max:20'  : 'nullable',
        ]);


        try{

            // Generate a unique order number
            $orderNumber = 'ORD-' . strtoupper(Str::random(10));
            // Generate Tracking Number (Format: 789-854-9658)
            $trackingNumber = rand(100, 999) . '-' . rand(100, 999) . '-' . rand(1000, 9999);
            
            $couponCode = session('coupon.code', '');
            $discount = session('coupon.discount', 0);
            $tax = session('tax.tax_rate', 0);
            $shipping = session('shipping.shipping_charge', 0);

            $subTotal = collect(session('cart', []))->sum(fn($item) => ($item['discountedPrice'] ?? $item['regularPrice']) * $item['quantity']);

            $grandTotal = ($subTotal + $tax + $shipping) - $discount;

            $paymentMethod = $request->payment;
            if ($paymentMethod !== 'cod' && $paymentMethod !== 'bank') {
                // call gateway
                $status = 'paid';
            } else {
                $status = 'pending';
            }

        // Store the order
        $order = Order::create([
            'user_id'         => Auth::id(),
            'order_number'    => $orderNumber,
            'coupon_code' => $couponCode,
            'discounted_amount' => $discount,
            'tax_amount' => $tax,
            'shipping_amount' => $shipping,
            'subtotal_amount' => $subTotal,
            'tracking_number' => $trackingNumber,
            
            // Shipping details
            'shipping_name'           => $request->shipping_name,
            'shipping_email'          => $request->shipping_email,
            'shipping_street_address' => $request->shipping_street_address,
            'shipping_country'        => $request->shipping_country,
            'shipping_state'          => $request->shipping_state,
            'shipping_zipcode'        => $request->shipping_zipcode,
            

            // Billing details: If "copy_address" is checked, use billing fields, otherwise use shipping fields
            'billing_name'           => $request->has('copy_address') ? $request->billing_name : $request->shipping_name,
            'billing_email'          => $request->has('copy_address') ? $request->billing_email : $request->shipping_email,
            'billing_street_address' => $request->has('copy_address') ? $request->billing_street_address : $request->shipping_street_address,
            'billing_country'        => $request->has('copy_address') ? $request->billing_country : $request->shipping_country,
            'billing_state'          => $request->has('copy_address') ? $request->billing_state : $request->shipping_state,
            'billing_zipcode'        => $request->has('copy_address') ? $request->billing_zipcode : $request->shipping_zipcode,


            // Payment & Order Details
            'total_amount'   => $grandTotal,
            'payment_method' => $request->payment,
            'payment_status' => $status, // Default pending
            'order_status'   => 'pending', // Default pending
            ]);

            if($order){
                foreach( session('cart', []) as $item){
                    $price = $item['discountedPrice'] ?? $item['regularPrice'];

                    Order_item::create([
                        'order_id' => $order->id,
                        'product_id' => $item['id'],
                        'product_name' => $item['name'],
                        'thumb' => $item['image'],
                        'color' => $item['color'] ?? null,
                        'size' => $item['size'] ?? null,
                        'quantity' => $item['quantity'],
                        'price' => $price,
                        'total' => $price * $item['quantity'],
                    ]);
                }
            }
            

            } catch (\Exception $e) {
                // dd($e);
                // Log the error message with stack trace
                Log::error('Order placement failed: ' . $e->getMessage(), [
                    'exception' => $e
                ]);
            } finally {
                // Remove session values after processing
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
