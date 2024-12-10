<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\PendaftaranController;

Route::get('/', function () {
    return view('musang');
});

// Rute statis dengan penamaan konsisten
Route::view('/musang', 'musang')->name('musang');
Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');
Route::view('/rangkaian', 'rangkaian')->name('rangkaian');
Route::view('/profile', 'profile')->name('profile');
Route::view('/result', 'result')->name('result');
Route::view('/vote', 'vote')->name('vote');
Route::view('/musang', 'musang')->name('musang.index');
    
// Rute dinamis dengan controller
Route::get('/result2', [VoteController::class, 'showResults'])->name('result2');
Route::post('/vote', [VoteController::class, 'store'])->name('vote.store');
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran.index');

// Rute otentikasi
Route::get('/registrasi', [AuthController::class, 'tampilRegister'])->name('register');
Route::post('/registrasi/submit', [AuthController::class, 'submitRegister'])->name('register.submit');
Route::get('/login', [AuthController::class, 'tampillogin'])->name('login.tampil');
Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');
Route::get('/profile', [AuthController::class, 'profilePage'])->name('profile')->middleware('auth');
Route::post('/signout', [AuthController::class, 'signOut'])->name('signout');
