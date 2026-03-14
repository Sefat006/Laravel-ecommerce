<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Page;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PagesController extends Controller
{
    //
    public function aboutUs()
    {
        $data = Page::where('slug','about-us')->first();
        return view('front.pages.about-us', compact('data')); // resources/views/front/pages/about.blade.php
    }

    public function contactUs()
    {
        $data = Page::where('slug','contact-us')->first();
        return view('front.pages.contact-us', compact('data')); // resources/views/front/pages/contact.blade.php
    }

    public function storeContact(Request $request)
    {
        // 1️⃣ Validate incoming request
        $request->validate([
            'firstname' => 'required|string|max:100',
            'lastname'  => 'required|string|max:100',
            'email'     => 'required|email|max:255',
            'phone'     => 'nullable|string|max:15',
            'message'   => 'required|string',
        ]);

        try {
            // 2️⃣ Store data into database
            Contact::create([
                'firstname' => $request->input('firstname'),
                'lastname'  => $request->input('lastname'),
                'email'     => $request->input('email'),
                'phone'     => $request->input('phone'),
                'message'   => $request->input('message'),
            ]);

            // Initialize Mailchimp API
            $mailchimp = new \DrewM\MailChimp\MailChimp(env('MAILCHIMP_API_KEY'));
            $listId = env('MAILCHIMP_LIST_ID');

            // Add subscriber to Mailchimp
            $response = $mailchimp->post("lists/$listId/members", [
                'email_address' => $request->input('email'),
                'status' => 'subscribed',
                'merge_fields' => [
                    'FNAME' => $request->firstname ?? '',
                    'LNAME' => $request->lasttname ?? '',
                    'PHONE' => $request->phone ?? '',
                ],
            ]);

            // Check if the Mailchimp API call was successful
            if ($mailchimp->success()) {
                return redirect()->back()->with('success', 'You have subscribed successfully!');
            } else {
                Log::error('Mailchimp API Error: ' . $mailchimp->getLastError());
                return redirect()->back()->with('warning', 'You have subscribed successfully!');
            }
        } catch (Exception $e) {
            Log::error('Subscription Error: ' . $e->getMessage());
        }

        // 3️⃣ Redirect back with success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }


    public function faq()
    {
        $data = Page::where('slug','faq')->first();
        $faqs = Faq::orderBy('id', 'desc')->get();
        return view('front.pages.faq', compact('faqs', 'data')); // resources/views/front/pages/faq.blade.php
    }

    public function termsAndConditions()
    {
        $data = Page::where('slug','terms-and-conditions')->first();
        return view('front.pages.terms-conditions', compact('data')); // resources/views/front/pages/terms.blade.php
    }

    public function privacyPolicy()
    {
        $data = Page::where('slug','privacy-policy')->first();
        return view('front.pages.privacy-policy', compact('data')); // resources/views/pages/privacy.blade.php
    }
}
