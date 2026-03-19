<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Gateway;
use App\Models\State;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);

        if (empty($cart)){
            return redirect()->route('cart.index');
        }

        $countries = Country::all();
        $gateway = Gateway::all()->keyBy('name');
        return view('front.checkout.index', compact('countries', 'gateway'));
    }    

    public function getStates($country_id)
    {
        $states = State::where('country_id', $country_id)->get();

        return response()->json([
            'states' => $states
        ]);
    }

    public function getTax($country_id)
    {
        $country = Country::where('id', $country_id)->first();
        $subTotal = collect(session('cart', []))->sum(fn($item) => ($item['discountedPrice'] ?? $item['regularPrice'])
            * $item['quantity']);
        $taxAmount = ($country->tax_rate / 100) * $subTotal;
        // Store in Session
        session()->put('tax', [
            'tax_rate' => $taxAmount ?? 0,
        ]);

        return response()->json(['tax_rate' => $taxAmount ?? 0]);
    }


    public function getShipping($state_id)
    {
        $state = State::where('id', $state_id)->first();

        // Store in Session
        session()->put('shipping', [
            'shipping_charge' => $state->shipping_charge ?? 0,
        ]);

        return response()->json(['shipping_charge' => $state->shipping_charge ?? 0]);
    }

    public function success(){
        return view('front.checkout.success');
    }
}
