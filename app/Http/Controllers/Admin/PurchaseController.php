<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Purchase_item;
use App\Models\Stock;
use App\Models\Supplier;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
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
        $suppliers = Supplier::latest()->get();
        return view('admin.purchases.create', compact('products', 'suppliers'));
    }



    public function store(Request $request)
    {
        // ✅ Validation
        $request->validate([
            'supplier_id'   => 'required|exists:suppliers,id',
            'purchase_date' => 'required|date',
            'product_id'    => 'required|array',
            'product_id.*'  => 'required|exists:products,id',
            'quantity.*'    => 'required|numeric|min:1',
            'price.*'       => 'required|numeric|min:0',
        ]);

        DB::beginTransaction();

        try {

            // ✅ Create Purchase
            $purchase = Purchase::create([
                'invoice_number' => $request->invoice_number ?? 'INV-' . strtoupper(Str::random(6)),
                'supplier_id'    => $request->supplier_id,
                'total_amount'   => $request->total_amount ?? 0,
                'purchase_date'  => $request->purchase_date,
                'notes'          => $request->notes,
            ]);

            // ✅ Loop products
            foreach ($request->product_id as $index => $productId) {

                $qty   = $request->quantity[$index];
                $price = $request->price[$index];
                $subtotal = $qty * $price;

                // 🔹 Save purchase items
                Purchase_item::create([
                    'purchase_id'    => $purchase->id,
                    'product_id'     => $productId,
                    'quantity'       => $qty,
                    'purchase_price' => $price,
                    'subtotal'       => $subtotal,
                ]);

                // 🔹 Update stock table
                Stock::create([
                    'product_id'     => $productId,
                    'stock_type'     => 'in',
                    'quantity'       => $qty,
                    'reference_type' => 'purchase',
                    'reference_id'   => $purchase->id,
                    'note'           => 'Purchase stock added',
                ]);

                // 🔹 Update product quantity (IMPORTANT)
                $product = Product::find($productId);
                $product->quantity += $qty;
                $product->save();
            }

            DB::commit();

            return redirect()->route('admin.purchases.index')
                ->with('success', 'Purchase created successfully.');
        } catch (\Exception $e) {

            DB::rollBack();

            return back()->with('error', $e->getMessage());
        }
    }





    public function edit($id)
    {
        $purchase = Purchase::with('purchaseItems')->findOrFail($id); // single purchase
        $products = Product::latest()->get();                         // products for dropdown
        $suppliers = Supplier::latest()->get();                       // suppliers for dropdown

        return view('admin.purchases.edit', compact('purchase', 'products', 'suppliers'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'supplier_id'   => 'required|exists:suppliers,id',
            'purchase_date' => 'required|date',
            'product_id'    => 'required|array',
        ]);

        $purchase = Purchase::with('purchaseItems')->findOrFail($id);

        // 🔥 STEP 1: REVERSE OLD STOCK
        foreach ($purchase->purchaseItems as $item) {

            $product = Product::find($item->product_id);
            $product->quantity -= $item->quantity;
            $product->save();

            // delete old stock history
            Stock::where('reference_type', 'purchase')
                ->where('reference_id', $purchase->id)
                ->where('product_id', $item->product_id)
                ->delete();
        }

        // 🔥 STEP 2: DELETE OLD ITEMS
        $purchase->purchaseItems()->delete();

        // 🔥 STEP 3: UPDATE PURCHASE
        $purchase->update([
            'invoice_number' => $request->invoice_number,
            'supplier_id'    => $request->supplier_id,
            'total_amount'   => $request->total_amount,
            'purchase_date'  => $request->purchase_date,
            'notes'          => $request->notes,
        ]);

        // 🔥 STEP 4: INSERT NEW DATA
        foreach ($request->product_id as $index => $productId) {

            $qty   = $request->quantity[$index];
            $price = $request->price[$index];
            $subtotal = $qty * $price;

            Purchase_item::create([
                'purchase_id'    => $purchase->id,
                'product_id'     => $productId,
                'quantity'       => $qty,
                'purchase_price' => $price,
                'subtotal'       => $subtotal,
            ]);

            // stock add again
            Stock::create([
                'product_id'     => $productId,
                'stock_type'     => 'in',
                'quantity'       => $qty,
                'reference_type' => 'purchase',
                'reference_id'   => $purchase->id,
            ]);

            // update product quantity
            $product = Product::find($productId);
            $product->quantity += $qty;
            $product->save();
        }

        return redirect()->route('admin.purchases.index')
            ->with('success', 'Purchase updated successfully.');
    }

}
