<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.welcome');
});

Route::get('/homeRa', function () {
    return view('homeRa');
});
