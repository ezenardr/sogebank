<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SettingsController;
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

    Route::group(['prefix' => '/account'], function () {
        Route::get('/', function () {
            return view('account');
        });
        Route::get('/new-account', function () {
            return view('new-account');
        });
        Route::get('/account-details/{account_id?}', function (string $account_id) {
            return view('account-details', ['account_id' => $account_id]);
        });
    });


    Route::group(['prefix' => '/beneficiary'], function () {
        Route::get('/', function () {
            return view('beneficiary');
        });
        Route::get('/new-beneficiary', function () {
            return view('new-beneficiary');
        });
    });

    Route::group(['prefix' => '/settings'], function () {
        Route::get('/', [SettingsController::class, 'showSettings'])->name('settings');
        Route::post('/preferences', [SettingsController::class, 'updatePreferences'])->name('settings.updatePreferences');
        Route::post('/security', [SettingsController::class, 'changePassword'])->name('settings.changePassword');
    });

});
