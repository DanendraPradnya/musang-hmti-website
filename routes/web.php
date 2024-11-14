<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

// Rute untuk halaman musang
Route::get('/', function () {
    return view('musang');
});

// Rute untuk login
Route::get('/login', function () {
    return view('login');
});
// Rute untuk login
Route::get('/register', function () {
    return view('register');
});
Route::get('/rangkaian', function () {
    return view('rangkaian');
});
