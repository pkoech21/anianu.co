<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Homepage with login + register forms
Route::get('/', function () {
    return view('home');
})->name('home');

// LOGIN routes
Route::post('/login', [LoginController::class, 'login'])->name('login');

// REGISTER routes
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// LOGOUT route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');