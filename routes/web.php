<?php


use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\CompareController;
use App\Http\Controllers\Frontend\CouponController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\OrderTrackingController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\ReviewController;
use App\Http\Controllers\Frontend\SocialAuthController;
use App\Http\Controllers\Frontend\SubscriberController;
use App\Http\Controllers\Frontend\UserController;
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
Route::get('/product/{slug}', [ProductController::class, 'productDetails'])->name('product.details');
Route::get('/category/{slug}', [ProductController::class, 'productsByCategory'])->name('products.byCategory');
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
// Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');


// Compare Routes
Route::get('/compare', [CompareController::class, 'index'])->name('compare.index');
Route::post('/compare/add', [CompareController::class, 'addToCompare'])->name('compare.add');
Route::delete('/compare/remove/{id}', [CompareController::class, 'remove'])->name('compare.remove');

// Wishlist Routes
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
Route::post('/wishlist/add', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');
Route::delete('/wishlist/remove/{id}', [WishlistController::class, 'remove'])->name('wishlist.remove');

// Cart Routes
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/increase', [CartController::class, 'increaseQuantity'])->name('cart.increase');
Route::post('/cart/decrease', [CartController::class, 'decreaseQuantity'])->name('cart.decrease');
// Route::put('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');

// Checkout Routes
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout/process', [CheckoutController::class, 'process'])->name('checkout.process');
Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');

// Subscribe Routes
Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscriber.store');

Auth::routes();

Route::prefix('user')->group(function(){
    Route::get('/profile', [UserController::class, 'index'])->name('user.profile');
    Route::get('/profile/edit', [UserController::class, 'edit'])->name('user.profile.edit');
    Route::post('/profile/update', [UserController::class, 'updateProfile'])->name('user.profile.update');

    Route::get('/orders', [UserController::class, 'orders'])->name('user.orders');
    Route::get('/order-details/{id}', [UserController::class, 'orderDetails'])->name('user.order.details');
    Route::get('/reviews', [UserController::class, 'reviews'])->name('user.reviews');
});



// order routes
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');
Route::get('/order-invoice/{id}', [OrderController::class, 'invoice'])->name('order.invoice');
Route::get('/get-states/{country_id}', [CheckoutController::class, 'getStates']);
Route::get('/get-tax/{country_id}', [CheckoutController::class, 'getTax']);
Route::get('/get-shipping/{state_id}', [CheckoutController::class, 'getShipping']);


// coupon apply
Route::post('/coupon/apply', [CouponController::class, 'applyCoupon']);
Route::get('/order-tracking/{number}', [OrderTrackingController::class, 'orderTracking' ])->name('order.track');
Route::post('/change-password', [UserController::class, 'changePassword'])->name('user.change-password');


Route::get('/auth/google', [SocialAuthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);
Route::post('/review-store', [ReviewController::class, 'store'])->name('review.store');