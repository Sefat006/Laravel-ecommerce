<?php

use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\WelcomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
/*
GET      → Get saved data from DB and show it
POST     → Save new data to DB(form submit)
PUT      → Update existing data in DB
PATCH    → Update specific fields in DB
DELETE   → Delete data from DB
*/

//frontend routes
Route::get('/', [WelcomeController::class, 'index']);

// Common Pages
Route::get('/about-us', [PagesController::class, 'aboutUs'])->name('about.us');
Route::get('/contact-us', [PagesController::class, 'contactUs'])->name('contact.us');
Route::get('/faq', [PagesController::class, 'faq'])->name('faq');
Route::get('/terms-conditions', [PagesController::class, 'termsAndConditions'])->name('terms.conditions');
Route::get('/privacy-policy', [PagesController::class, 'privacyPolicy'])->name('privacy.policy');