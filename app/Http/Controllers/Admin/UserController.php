<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function index()
    {
        // $customers = User::latest()->get();
        // $ordered_customers = User::with('orders')->latest()->get();
        // return view('admin.customers.index', compact('customers', 'ordered_customers'));

        $customers = User::with('orders')->latest()->get();
        return view('admin.customers.index', compact('customers'));
    }


    public function edit($id)
    {
        return view('admin.customers.edit');
    }


    public function destroy($id)
    {
        $customer = User::findOrFail($id);

        // Delete image
        $imagePath = public_path('front/assets/images/' . $customer->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $customer->delete();

        return redirect()->route('admin.customers.index')->with('success', 'Customer is deleted successfully');
    }
}
