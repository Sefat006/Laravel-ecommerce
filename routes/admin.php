<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SubscribersController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\GatewayController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\StatesController;
use App\Http\Controllers\Admin\UserController;

Route::prefix('admin')->name('admin.')->group(function () {
    //login pages
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');


    Route::middleware('auth:admin')->group(function () {

        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // contacts form routes
        Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');
        Route::get('contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');
        Route::delete('contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');

        //subscriber routes
        Route::get('subscribers', [SubscribersController::class, 'index'])->name('subscribers.index');

        // Slider Routes
        Route::get('sliders', [SliderController::class, 'index'])->name('sliders.index');
        Route::get('sliders/create', [SliderController::class, 'create'])->name('slider.create');
        Route::post('sliders', [SliderController::class, 'store'])->name('sliders.store');
        Route::get('sliders/{id}', [SliderController::class, 'show'])->name('sliders.show');
        Route::get('sliders/{id}/edit', [SliderController::class, 'edit'])->name('sliders.edit');
        Route::put('sliders/{id}', [SliderController::class, 'update'])->name('sliders.update');
        Route::delete('sliders/{id}', [SliderController::class, 'destroy'])->name('sliders.destroy');


        // faqs Routes
        Route::get('faq', [FaqController::class, 'index'])->name('faq.index');
        Route::get('faq/create', [FaqController::class, 'create'])->name('faq.create');
        Route::post('faq', [FaqController::class, 'store'])->name('faq.store');
        Route::get('faq/{id}', [FaqController::class, 'show'])->name('faq.show');
        Route::get('faq/{id}/edit', [FaqController::class, 'edit'])->name('faq.edit');
        Route::put('faq/{id}', [FaqController::class, 'update'])->name('faq.update');
        Route::delete('faq/{id}', [FaqController::class, 'destroy'])->name('faq.destroy');

        // Testimonial Routes
        Route::get('testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
        Route::get('testimonials/create', [TestimonialController::class, 'create'])->name('testimonial.create');
        Route::post('testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');
        Route::get('testimonials/{id}', [TestimonialController::class, 'show'])->name('testimonials.show');
        Route::get('testimonials/{id}/edit', [TestimonialController::class, 'edit'])->name('testimonial.edit');
        Route::put('testimonials/{id}', [TestimonialController::class, 'update'])->name('testimonial.update');
        Route::delete('testimonials/{id}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');


        // Categories Routes
        Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('categories/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
        Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('categories/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('categories/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');


        // Brands Routes
        Route::get('brands', [BrandController::class, 'index'])->name('brands.index');
        Route::get('brands/create', [BrandController::class, 'create'])->name('brand.create');
        Route::post('brands', [BrandController::class, 'store'])->name('brands.store');
        Route::get('brands/{id}', [BrandController::class, 'show'])->name('brands.show');
        Route::get('brands/{id}/edit', [BrandController::class, 'edit'])->name('brand.edit');
        Route::put('brands/{id}', [BrandController::class, 'update'])->name('brand.update');
        Route::delete('brands/{id}', [BrandController::class, 'destroy'])->name('brand.destroy');



        // Brands Routes
        Route::get('pages', [PagesController::class, 'index'])->name('pages.index');
        Route::get('pages/{id}', [PagesController::class, 'show'])->name('pages.show');
        Route::get('pages/{id}/edit', [PagesController::class, 'edit'])->name('page.edit');
        Route::put('pages/{id}', [PagesController::class, 'update'])->name('page.update');


        Route::get('setting/{id}/edit', [SettingController::class, 'edit'])->name('setting.edit');
        Route::put('setting/{id}', [SettingController::class, 'update'])->name('setting.update');


        // Coupon Route
        Route::get('coupons', [CouponController::class, 'index'])->name('coupons.index');
        Route::get('coupons/create', [CouponController::class, 'create'])->name('coupon.create');
        Route::post('coupons', [CouponController::class, 'store'])->name('coupons.store');
        Route::get('coupons/{id}', [CouponController::class, 'show'])->name('coupons.show');
        Route::get('coupons/{id}/edit', [CouponController::class, 'edit'])->name('coupon.edit');
        Route::put('coupons/{id}', [CouponController::class, 'update'])->name('coupon.update');
        Route::delete('coupons/{id}', [CouponController::class, 'destroy'])->name('coupon.destroy');



        // Users Route
        Route::get('users', [AdminController::class, 'index'])->name('users.index');
        Route::get('users/create', [AdminController::class, 'create'])->name('user.create');
        Route::post('users', [AdminController::class, 'store'])->name('users.store');
        Route::get('users/{id}', [AdminController::class, 'show'])->name('users.show');
        Route::get('users/{id}/edit', [AdminController::class, 'edit'])->name('user.edit');
        Route::put('users/{id}', [AdminController::class, 'update'])->name('user.update');
        Route::delete('users/{id}', [AdminController::class, 'destroy'])->name('user.destroy');


        // gateways route
        Route::get('gateways/edit', [GatewayController::class, 'edit'])->name('gateways.edit');
        Route::put('gateways', [GatewayController::class, 'update'])->name('gateways.update');


        // Customers Route
        Route::get('customers', [UserController::class, 'index'])->name('customers.index');
        Route::delete('customers/{id}', [UserController::class, 'destroy'])->name('customer.destroy');


        // orders Route
        Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
        Route::get('orders/{id}', [OrderController::class, 'show'])->name('orders.show');




        // Countries Routes
        Route::get('countries', [CountryController::class, 'index'])->name('countries.index');
        Route::get('countries/create', [CountryController::class, 'create'])->name('country.create');
        Route::post('countries', [CountryController::class, 'store'])->name('countries.store');
        Route::get('countries/{id}', [CountryController::class, 'show'])->name('countries.show');
        Route::get('countries/{id}/edit', [CountryController::class, 'edit'])->name('country.edit');
        Route::put('countries/{id}', [CountryController::class, 'update'])->name('country.update');
        Route::delete('countries/{id}', [CountryController::class, 'destroy'])->name('country.destroy');



        // States Routes
        Route::get('states', [StatesController::class, 'index'])->name('states.index');
        Route::get('states/create', [StatesController::class, 'create'])->name('state.create');
        Route::post('states', [StatesController::class, 'store'])->name('states.store');
        Route::get('states/{id}', [StatesController::class, 'show'])->name('states.show');
        Route::get('states/{id}/edit', [StatesController::class, 'edit'])->name('state.edit');
        Route::put('states/{id}', [StatesController::class, 'update'])->name('state.update');
        Route::delete('states/{id}', [StatesController::class, 'destroy'])->name('state.destroy');
    });
});
