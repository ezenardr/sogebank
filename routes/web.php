<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeneficiaryController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TransfertController;
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

    Route::group(['prefix' => '/send-money'], function () {
        Route::get('/', function () {
            return view('send-money');
        });
        Route::get('/my-account', [TransfertController::class, 'ShowSendMoneyBetweenMyAccount'])->name('ShowSendMoneyBetweenMyAccount');
        Route::post('/my-account', [TransfertController::class, 'SendMoney']);

        Route::get('/third-party-sogebank', [TransfertController::class, 'ShowSendMoneyToThirdPartySogebank'])->name('ShowSendMoneyToThirdPartySogebank');
        Route::post('/third-party-sogebank', [TransfertController::class, 'SendMoney']);


    });

    Route::group(['prefix' => '/account'], function () {
        Route::get('/', [AccountController::class, 'showAccount'])->name('show-account');

        Route::get('/new-account', function () {
            return view('new-account');
        });
        Route::post('/new-account', [AccountController::class, 'createAccount'])->name('create-account');

        Route::get('/account-details/{account_id?}', function (string $account_id) {
            return view('account-details', ['account_id' => $account_id]);
        });
    });


    Route::group(['prefix' => '/beneficiary'], function () {
        Route::get('/', [BeneficiaryController::class, 'ShowBeneficiary'])->name('show-beneficiary');

        Route::get('/new-beneficiary', [BeneficiaryController::class, 'NewBeneficiaryView'])->name('new-beneficiary');

        Route::post('/new-beneficiary', [BeneficiaryController::class, 'AddBeneficiary'])->name('add-beneficiary');
        Route::get('/{id}/accounts', [BeneficiaryController::class, 'getAccounts']);
    });

    Route::group(['prefix' => '/settings'], function () {
        Route::get('/', [SettingsController::class, 'showSettings'])->name('settings');
        Route::post('/preferences', [SettingsController::class, 'updatePreferences'])->name('settings.updatePreferences');
        Route::post('/security', [SettingsController::class, 'changePassword'])->name('settings.changePassword');
    });

});
