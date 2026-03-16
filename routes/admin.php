<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SubscribersController;
use App\Http\Controllers\Admin\TestimonialController;


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


        Route::get('testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
        Route::get('testimonials/create', [TestimonialController::class, 'create'])->name('testimonial.create');
        Route::post('testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');
        Route::get('testimonials/{id}', [TestimonialController::class, 'show'])->name('testimonials.show');
        Route::get('testimonials/{id}/edit', [TestimonialController::class, 'edit'])->name('testimonial.edit');
        Route::put('testimonials/{id}', [TestimonialController::class, 'update'])->name('testimonial.update');
        Route::delete('testimonials/{id}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');
    });
});
