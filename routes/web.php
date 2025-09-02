<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyPageController;
// Homepage
Route::get('/', function () {
    return view('home'); // home.blade.php with login/register
})->name('home');// 
Route::post('/login', [LoginController::class, 'login'])->name('login');
// REGISTER route
 Route::post('/register', [RegisterController::class, 'register'])->name('register');
  // LOGOUT route 
  Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard (after login)
Route::get('/dashboard', function () {
    return view('dashboard'); 
})->name('dashboard');

Route::get('/', [CompanyController::class, 'index'])->name('home');
Route::post('/companypages', [CompanyPageController::class, 'store'])->name('companypages.store');