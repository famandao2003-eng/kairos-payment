<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/installment', function () {
    return view('installment');
});

Route::get('/payment-method', function () {
    return view('payment-method');
});

Route::get('/payment-validation', function () {
    return view('payment-validation');
});

Route::get('/confirmation', function () {
    return view('confirmation');
});

Route::fallback(function () {
    return redirect('/');
});
