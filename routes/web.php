<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('landing');
});
// Route::get('/login', function () {
//     return view('login');
// });
// Auth::routes();

Route::get('/login', [AuthController::class, 'login']);
// Route::get('/register', [AuthController::class, 'register']);
Route::POST('/login', [AuthController::class, 'ValidateLogin'])->name('login');
Route::POST('/register', [AuthController::class, 'ValidateRegister'])->name('register');



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

Route::post('/detail1', function (Request $req) {
    dd($req->all());
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
