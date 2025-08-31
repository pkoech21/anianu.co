<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Homepage
Route::get('/', function () {
    return view('home'); // home.blade.php with login/register
})->name('home');

// Welcome page (after login)
Route::get('/welcome', function () {
    return view('welcome'); // welcome.blade.php
})->name('welcome');

// LOGIN route
Route::post('/login', [LoginController::class, 'login'])->name('login');

// REGISTER route
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// LOGOUT route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
