<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/auth/register', [AuthController::class, 'showRegister'])->name('auth.ShowRegister');
Route::post('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/auth/login', [AuthController::class, 'showLogin'])->name('auth.ShowLogin');

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/transactions', function () {
    return view('transactions');
});
Route::get('/account', function () {
    return view('account');
});
Route::get('/settings', function () {
    return view('settings');
});
