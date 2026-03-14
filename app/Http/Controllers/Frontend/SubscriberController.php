<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SubscriberController extends Controller
{

    // Handle subscription (placeholder)
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
            // 'email' → যেই ফিল্ড চেক করতে চাই (form-এর input name="email")
            // 'required' → ফিল্ডটি অবশ্যই ভরা থাকতে হবে
            // 'email' → ডেটা সঠিক ইমেল ফরম্যাটে আছে কিনা
            // 'unique:subscribers,email' → subscribers টেবিলে এই ইমেল আগে আছে কিনা চেক করে। যদি আগে থাকে, সাবমিট হবে না
        ]);

        // store the subscribers(email) using Eloquent
        try{
            Subscriber::create([ //create() নতুন row টেবিলে insert করে।
                'email' => $request->email,
                // 'email' → টেবিলের কলামের নাম
                // $request->email → form থেকে আসা ইউজারের ইমেল
            ]);

            // Initialize Mailchimp API
            $mailchimp = new \DrewM\MailChimp\MailChimp(env('MAILCHIMP_API_KEY'));
            $listId = env('MAILCHIMP_LIST_ID');

            // Add subscriber to Mailchimp
            $response = $mailchimp->post("lists/$listId/members", [
                'email_address' => $request->email,
                'status' => 'subscribed',
            ]);

            // Check if the Mailchimp API call was successful
            if ($mailchimp->success()) {
                return redirect()->back()->with('success', 'You have subscribed successfully!');
            } else {
                Log::error('Mailchimp API Error: ' . $mailchimp->getLastError());
                return redirect()->back()->with('warning', 'You have subscribed successfully!');
            }
        } catch(Exception $e){
            Log::error('Subscription Error: '.$e->getMessage());
        }

        // TODO: Add logic to save subscriber email
        return redirect()->back()->with('success', 'Subscribed successfully');
    }
}
