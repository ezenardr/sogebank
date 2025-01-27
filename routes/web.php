<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/auth/register', [AuthController::class, 'showRegister'])->name('auth.ShowRegister');
Route::post('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/auth/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/auth/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('dashboard');
}) -> middleware(['auth'])->name('dashboard');
Route::get('/transactions', function () {
    return view('transactions');
});
Route::get('/account', function () {
    return view('account');
});
Route::get('/settings', function () {
    return view('settings');
});
