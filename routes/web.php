<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;


// Rute untuk halaman musang

Route::get('/', function () {

    return view('musang');

})->name('musang');



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

Route::get('/pendaftaran', function () {

    return view('pendaftaran');

});



Route::get('/registrasi',[AuthController::class,'tampilRegister'])->name('register');

Route::post('/registrasi/submit',[AuthController::class,'submitRegister'])->name('register.submit');





Route::get('/login',[AuthController::class,'tampillogin'])->name('login.tampil');

Route::post('/login/submit',[AuthController::class,'submitLogin'])->name('login.submit');





Route::post('/logout',[AuthController::class,'tampilLogout'])->name('logout');