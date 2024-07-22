<?php

use App\Http\Controllers\PelajarController;
use App\Http\Controllers\PengajarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Models\Sertifandskil;

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
// Route::get('/DetailPengajar', function () {
//     return view('DetailPengajar');
// });

// DetailPengajar.show
Route::get('/DetailPengajar/{guru_id}',[GuruController::class, 'show'])->name('DetailPengajar.show');
Route::post('/DetailPengajar/{guru_id}/upload',[GuruController::class, 'store'])->name('DetailPengajar.store');

Route::get('/DetailPengajar',[GuruController::class, 'showall'])->name('DetailPengajar.showall');




// yohhhhh
// UbahProfilPengajar
Route::get('/UbahProfilPengajar', function () {
    return view('UbahProfilPengajar');
});

Route::get('/UbahProfilPelajar', function () {
    return view('UbahProfilPelajar');
});

Route::get('/DetailReqMengajar', function () {
    return view('Pengajar.DetailPermintaanMengajar');
});

Route::get('/FormZoom', function(){
    return view('Pengajar.FormZoomAfterAccept');
});

Route::get('/Konfirm', function(){
    return view('Pengajar.KonfirmasiPermintaanMengajar');
});

Route::get('/RequestKelas', function(){
    return view('Pelajar.RequestKelas');
});

Route::get('/RequestKelas3', function(){
    return view('Pelajar.RequestKelas3');
});

Route::get('/ReqKelasPayment', function(){
    return view('Pelajar.RequestKelasPayment');
});

Route::get('/ReqKelasConfirm', function(){
    return view('Pelajar.RequestKelasConfirm');
});

Route::get('/ReqKelasSchedule', function(){
    return view('Pelajar.RequestKelasSchedule');
});
