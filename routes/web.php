<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', function () {
    return view('landing');
});



// agustinus
// Detail1
Route::get('/detail1', function () {
    return view('detail1');
});
// DetailPengajar
Route::get('/DetailPengajar', function () {
    return view('DetailPengajar');
});


// yohhhhh
// UbahProfilPengajar
Route::get('/UbahProfilPengajar', function () {
    return view('UbahProfilPengajar');
});