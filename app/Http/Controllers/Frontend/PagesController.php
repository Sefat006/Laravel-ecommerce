<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function aboutUs()
    {
        return view('front.pages.about-us'); // resources/views/front/pages/about.blade.php
    }

    public function contactUs()
    {
        return view('front.pages.contact-us'); // resources/views/front/pages/contact.blade.php
    }

    public function faq()
    {
        return view('front.pages.faq'); // resources/views/front/pages/faq.blade.php
    }

    public function termsAndConditions()
    {
        return view('front.pages.terms-conditions'); // resources/views/front/pages/terms.blade.php
    }

    public function privacyPolicy()
    {
        return view('front.pages.privacy-policy'); // resources/views/pages/privacy.blade.php
    }
}
