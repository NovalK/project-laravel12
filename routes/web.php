<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showForm'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

// halaman dashboard yang hanya bisa diakses setelah login
Route::get('/dashboard', function () {
    return view('dashboard.layout');
})->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::resource('users', UserController::class);
});

Route::get('/setting-registrasi', function () {
    return view('dashboard.setting_registrasi');
})->name('setting.index');

Route::post('/setting-registrasi', 'SettingController@store')->name('setting.store');

Route::get('/', function () {
    return view('welcome');
});
