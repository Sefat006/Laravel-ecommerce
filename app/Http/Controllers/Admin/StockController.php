<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::latest()->get();
        return view('admin.stocks.index', compact('stocks'));
    }


    public function create()
    {
        return view('admin.stocks.currentStock');
    }



    




    public function currentStock()
    {
        $products = Product::with('category')
            ->withSum(['stocks as stock_in' => function ($query) {
                $query->where('stock_type', 'in');
            }], 'quantity')
            ->withSum(['stocks as stock_out' => function ($query) {
                $query->where('stock_type', 'out');
            }], 'quantity')
            ->get();

        foreach ($products as $product) {
            $stockIn = $product->stock_in ?? 0;
            $stockOut = $product->stock_out ?? 0;

            $product->current_stock = $stockIn - $stockOut; 
        }

        $lowStockProducts = [];
        $okStockProducts = [];

        foreach ($products as $product) {
            if ($product->current_stock < $product->minimum_stock) {
                $lowStockProducts[] = $product;
            } else {
                $okStockProducts[] = $product;
            }
        }

        $sortedProducts = array_merge($lowStockProducts, $okStockProducts);

        return view('admin.stocks.currentStock', ['products' => $sortedProducts]);
    }
}
