<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_item;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest()->get();
        return view('admin.orders.index', compact('orders'));
    }


    public function show($id)
    {
        $order = Order::with([
            'BillingCountry',
            'BillingState',
            'ShippingCountry',
            'ShippingState'
        ])->findOrFail($id);

        $items = Order_item::where('order_id', $id)->get();
        return view('admin.orders.show', compact('order', 'items'));
    }


    public function transactions()
    {
        $transactions = Order::latest()->get();
        return view('admin.transactions.index', compact('transactions'));
    }
}
