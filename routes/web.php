<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/auth/register', [AuthController::class, 'showRegister'])->name('auth.ShowRegister');
Route::post('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/auth/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/auth/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/transactions', function () {
        return view('transactions');
    });

    Route::get('/send-money', function () {
        return view('send-money');
    });
    Route::get('/account', function () {
        return view('account');
    });
    Route::get('/account-details/{account_id?}', function (string $account_id) {
        return view('account-details', ['account_id' => $account_id]);
    });
    Route::get('/account/new-account', function () {
        return view('new-account');
    });
    Route::get('/beneficiary', function () {
        return view('beneficiary');
    });
    Route::get('/settings', function () {
        return view('settings');
    });
});

