<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\WeddingHallController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReviewController;

Route::resource('users', UserController::class);
Route::resource('wedding-halls', WeddingHallController::class);
Route::resource('bookings', BookingController::class);
Route::resource('reviews', ReviewController::class);


