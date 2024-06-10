<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', function () {
    return view('landing');
});

// agustinus
// Detail1.blade.php
Route::get('/detail1', function () {
    return view('Agustinus/detail1');
});
