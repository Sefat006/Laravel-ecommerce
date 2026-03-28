<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases = Purchase::latest()->get();
        return view('admin.purchases.index', compact('purchases'));
    }


    public function create()
    {
        $products = Product::latest()->get();
        return view('admin.purchases.create', compact('products'));
    }


    public function edit($id)
    {
        $purchases = Purchase::with('purchaseItems')->findOrFail($id);
        $products = Product::latest()->get();
        return view('admin.products.edit', compact('products', 'purchases'));
    }


    public function destroy($id)
    {
        $purchase = Purchase::findOrFail($id);
        $purchase->delete();

        return redirect()->route('admin.purchases.index')->with('success', 'Purchases is deleted successfully');
    }
}
