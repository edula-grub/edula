<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/riwayatpengajar',function() {
    return view('ktks');
});