<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Deliveryman_notification;
use App\Models\Order;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('front.user.profile');
    }

    public function edit()
    {
        return view('front.user.edit');
    }

    public function updateProfile(Request $request)
    {
        // Get authenticated user
        $user = Auth::user();

        // Validate input data
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255|unique:users,email,' . $user->id,
            'phone'   => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'zipcode' => 'nullable|string|max:20',
            'image'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // 2MB max
        ]);

        try {
            // Handle image upload
            if ($request->hasFile('image')) {
                // Define the new image path
                $destinationPath = public_path('front/assets/images/avatar/');

                // Ensure the directory exists
                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0777, true);
                }

                // Delete old image if exists
                if ($user->image && file_exists($destinationPath . $user->image)) {
                    unlink($destinationPath . $user->image);
                }

                // Store new image
                $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move($destinationPath, $imageName);

                // Save new image name to database
                $user->image = $imageName;
            }

            // Update user data
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->zipcode = $request->zipcode;
            $user->save();
        } catch (\Exception $e) {
            // Log the error message with stack trace
            Log::error('Profile update failed: ' . $e->getMessage(), [
                'exception' => $e
            ]);

            return redirect()->back()->with('error', 'Something went wrong!');
        }

        // Redirect with success message
        return redirect()->back()->with('success', 'Profile updated successfully!');
    }


    public function orders()
    {
        $orders = Order::with('orderItems')->where('user_id', Auth::id())->get();
        // dd($orders);
        $deliveredOrders = Order::with('orderItems')
            ->where('user_id', Auth::id())
            ->where('order_status', 'delivered')
            ->get();

        $canceledOrders = Order::with('orderItems')
            ->where('user_id', Auth::id())
            ->where('order_status', 'canceled')
            ->get();

        return view('front.user.orders', compact('orders', 'deliveredOrders', 'canceledOrders'));
    }




    public function orderDetails($id)
    {
        $order = Order::with('orderItems')->findOrFail($id);
        return view('front.user.order-details', compact('order'));
    }



    public function reviews()
    {
        $reviews = Review::with('products')->where('user_id', Auth::id())->get();
        // dd($reviews);
        return view('front.user.reviews', compact('reviews'));
    }



    public function changePassword(Request $request)
    {
        // Validate input
        $request->validate([
            'current_password' => 'required',
            'new_password'     => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);

        $user = Auth::user();

        // Check if current password matches
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Current password is incorrect.');
        }

        // Update the password
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Password changed successfully!');
    }








    // In App\Http\Controllers\Frontend\UserController

    public function allOrders()
    {
        // Deliveryman sees ALL orders (to know what's happening)
        $orders = Order::with('orderItems')->latest()->get();
        return view('front.user.deliveryman-orders.all-orders', compact('orders'));
    }

    public function assignedOrders()
    {
        // Only orders assigned to this deliveryman
        $orders = Order::with('orderItems')
            ->where('deliveryman_id', Auth::id())
            ->latest()
            ->get();

        // Mark notifications as read when they visit this page
        Deliveryman_notification::where('deliveryman_id', Auth::id())
            ->where('is_read', false)
            ->update(['is_read' => true]);

        return view('front.user.deliveryman-orders.assigned-orders', compact('orders'));
    }

    // Deliveryman marks order as delivered
    public function markDelivered(Request $request, $id)
    {
        $order = Order::where('id', $id)
            ->where('deliveryman_id', Auth::id())
            ->firstOrFail();

        $order->update(['order_status' => 'delivered']);

        return redirect()->back()->with('success', 'Order marked as delivered!');
    }
}
