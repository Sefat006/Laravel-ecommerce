<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gateway;
use Illuminate\Http\Request;

class GatewayController extends Controller
{
    public function edit()
    {
        $gateway = Gateway::all()->keyBy('name');
        return view('admin.gateways.edit', compact('gateway'));
    }



    public function update(Request $request)
    {
        // PAYPAL
        $paypal = Gateway::where('name', 'paypal')->first();
        $paypal->update([
            'credentials' => [
                'client_id' => $request->input('gateways.paypal.credentials.client_id'),
                'client_secret' => $request->input('gateways.paypal.credentials.client_secret'),
            ],
            'status' => $request->input('gateways.paypal.status', 0)
        ]);

        // CREDIT CARD
        $creditcard = Gateway::where('name', 'creditcard')->first();
        $creditcard->update([
            'credentials' => [
                'public_key' => $request->input('gateways.creditcard.credentials.public_key'),
                'secret_key' => $request->input('gateways.creditcard.credentials.secret_key'),
            ],
            'status' => $request->input('gateways.creditcard.status', 0)
        ]);

        // RAZORPAY
        $razorpay = Gateway::where('name', 'razorpay')->first();
        $razorpay->update([
            'credentials' => [
                'key_id' => $request->input('gateways.razorpay.credentials.key_id'),
                'key_secret' => $request->input('gateways.razorpay.credentials.key_secret'),
            ],
            'status' => $request->input('gateways.razorpay.status', 0)
        ]);

        // SSLCOMMERZ
        $sslcommerz = Gateway::where('name', 'sslcommerz')->first();
        $sslcommerz->update([
            'credentials' => [
                'store_id' => $request->input('gateways.sslcommerz.credentials.store_id'),
                'store_password' => $request->input('gateways.sslcommerz.credentials.store_password'),
            ],
            'status' => $request->input('gateways.sslcommerz.status', 0)
        ]);

        // BANK
        $bank = Gateway::where('name', 'bank')->first();
        $bank->update([
            'credentials' => [
                'account_name' => $request->input('gateways.bank.credentials.account_name'),
                'account_number' => $request->input('gateways.bank.credentials.account_number'),
                'bank_name' => $request->input('gateways.bank.credentials.bank_name'),
            ],
            'status' => $request->input('gateways.bank.status', 0)
        ]);

        // COD
        $cod = Gateway::where('name', 'cod')->first();
        $cod->update([
            'credentials' => [], // no credentials
            'status' => $request->input('gateways.cod.status', 0)
        ]);

        return redirect()->route('admin.gateways.edit')
            ->with('success', 'Gateways updated successfully.');
    }
}
