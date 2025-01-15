<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/test', function () {
    return view('test');
});
