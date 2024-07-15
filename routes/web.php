<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/CaraKerjaPelajar', function () {
    return view('caraKerjaPelajar');
});

Route::get('/CaraKerjaPengajar', function(){
    return view('caraKerjaPengajar');
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/riwayatpengajar',function() {
    return view('ktks');
});

Route::get('/riwayatpengajar2',function() {
    return view('rr');
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
