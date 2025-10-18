<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dokumentasi', function () {
    return view('dokumentasi');
});
