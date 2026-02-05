<?php


use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\CompareController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\SubscriberController;
use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\Frontend\WishlistController;
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
Route::get('/contact-us', [PagesController::class, 'contactUs'])->name('contact');
Route::post('/contact-us', [PagesController::class, 'storeContact'])->name('contact.store');
Route::get('/faq', [PagesController::class, 'faq'])->name('faq');
Route::get('/categories', [CategoryController::class, 'index'])->name('category.all');
Route::get('/terms-conditions', [PagesController::class, 'termsAndConditions'])->name('terms.conditions');
Route::get('/privacy-policy', [PagesController::class, 'privacyPolicy'])->name('privacy.policy');


// Product Routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');


// Compare Routes
Route::get('/compare', [CompareController::class, 'index'])->name('compare.index');
Route::post('/compare/add', [CompareController::class, 'add'])->name('compare.add');
Route::delete('/compare/remove/{id}', [CompareController::class, 'remove'])->name('compare.remove');

// Wishlist Routes
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
// Route::post('/wishlist/add', [WishlistController::class, 'add'])->name('wishlist.add');
// Route::delete('/wishlist/remove/{id}', [WishlistController::class, 'remove'])->name('wishlist.remove');

// Cart Routes
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
// Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
// Route::put('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
// Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

// Checkout Routes
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout/process', [CheckoutController::class, 'process'])->name('checkout.process');

// Subscribe Routes
Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscriber.store');
