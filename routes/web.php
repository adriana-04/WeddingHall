<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\BookingController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/about', function () {
    return "About Page (we will build later)";
});

Route::get('/contact', function () {
    return "Contact Page (we will build later)";
});

Route::get('/register', [RegisterController::class, 'showForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');