<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('posts.index');
// })->name('home');

// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');

Route::view('/', 'posts.index')->name('home'); // Shorter syntax for simple routes
Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [AuthController::class, 'register']);
