<?php

use App\Models\Sertifandskil;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\ipaymuController;

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

Route::get('/riwayatpengajar2',function() {
    return view('rr');
});

// agustinus
// Detail1
Route::get('/detail1', function () {
    return view('detail1');
});
// DetailPengajar
// Route::get('/DetailPengajar', function () {
//     return view('DetailPengajar');
// });

// DetailPengajar.show
Route::get('/DetailPengajar/{guru_id}',[GuruController::class, 'show'])->name('DetailPengajar.show');
Route::post('/DetailPengajar/{guru_id}/upload',[GuruController::class, 'store'])->name('DetailPengajar.store');

Route::get('/DetailPengajar',[GuruController::class, 'showall'])->name('DetailPengajar.showall');

Route::get('/Pembayaran', [ipaymuController::class, 'pembayaran'])->name('Pembayaran');

