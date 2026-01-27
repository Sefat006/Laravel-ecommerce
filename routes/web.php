<?php

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