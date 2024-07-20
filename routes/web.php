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
    return view('Pelajar.RquestKelasConfirm');
});
