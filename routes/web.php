<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\WeddingHallController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReviewController;

Route::apiResource('users', UserController::class);
Route::apiResource('wedding-halls', WeddingHallController::class);
Route::apiResource('bookings', BookingController::class);
Route::apiResource('reviews', ReviewController::class);


