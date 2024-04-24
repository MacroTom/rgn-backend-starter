<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

// Routes connects us to different path of our application/website

Route::get('/', function () {
    // HTML Page
    return view('welcome');
});

// using controller approach
Route::get('/contact', [ContactController::class, 'index']);

Route::get('/contacts', [ContactController::class, 'contacts']);

Route::post('/save-contact', [ContactController::class, 'store']);

// show the registration page
Route::get('/registration', [RegistrationController::class, 'index']);

// show the login page
Route::get('/signin', [AuthController::class, 'index'])->name('login');

// to send the data and login the user
Route::post('/login', [AuthController::class, 'login']);

// to send the data and create account for the user
Route::post('/register', [RegistrationController::class, 'store'])
->name('register');

// block a user that is not logged in
Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
