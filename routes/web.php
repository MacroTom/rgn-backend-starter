<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Routes connects us to different path of our application/website

Route::get('/', function () {
    // HTML Page
    return view('welcome');
});

// using controller approach
Route::get('/contact', [UserController::class, 'contact']);
Route::get('/login', [UserController::class, 'login']);

// Closure approach
// Route::get('/contact', function(){
//     return view('contact', [
//         'name' => 'Samantha',
//         'age' => '29 years'
//     ]);
// });

Route::post('/save-contact', function(){
    // Grabs the data from the request and output
    dd(request()->all());
});
