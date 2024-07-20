<?php

use App\Http\Controllers\PelajarController;
use App\Http\Controllers\PengajarController;
use Illuminate\Http\Request;
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

// Route::get('/riwayatpengajar',function() {
//     return view('ktks');
// });

Route::get('/riwayatpengajar', [PengajarController::class, 'riwayatpengajar'])->name('riwayatpengajar');
// Route::get('/riwayatpengajar/{id}', [PengajarController::class, 'riwayatpengajar'])->name('riwayatpengajar.show');

// Route::get('/riwayatpengajar2',function() {
//     return view('rr');
// });




// agustinus
// Detail1
Route::get('/detail1', function () {
    return view('detail1');
});

// Route::post('/detail1', function (Request $req) {
//     dd($req->all());
//     return view('detail1');
// });
Route::post('/form-review', [PelajarController::class, 'store'])->name('form-review');

// DetailPengajar
Route::get('/DetailPengajar', function () {
    return view('DetailPengajar');
});




// yohhhhh
// UbahProfilPengajar
Route::get('/UbahProfilPengajar', function () {
    return view('UbahProfilPengajar');
});
