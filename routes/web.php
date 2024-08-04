<?php

use App\Http\Controllers\PelajarController;
use App\Http\Controllers\PengajarController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\ipaymuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelajarState;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UbahProfilController;
use App\Http\Controllers\LinkController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'ValidateLogin'])->name('login');
Route::post('/register', [AuthController::class, 'ValidateRegister'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::any('/ReqPelajaran', [PelajarState::class, 'BuatPenajuan'])->name('BuatPenajuan');
Route::any('/dashboard', [PelajarState::class, 'dashboard'])->name('dashboard');
Route::get('/Rom', [PelajarState::class, 'Edetail'])->name('detail');
Route::get('/Rom/setpo', [PelajarState::class, 'setpo'])->name('setpo');
Route::get('/Rom/approve', [PelajarState::class, 'approve'])->name('approve');
Route::get('/AmbilKelas', [PelajarState::class, 'AmbilKelas'])->name('AmbilKelas');
Route::get('/UbahProfilPelajar', [UbahProfilController::class, 'ViewUbahProfil']);
Route::get('/UbahProfilPengajar', [UbahProfilController::class, 'ViewUbahProfil']);
Route::post('/UbahProfilPengajar/update', [UbahProfilController::class, 'UpdateUbahProfil'])->name('updateprofil');
Route::get('/UbahPasswordPengajar', [UbahProfilController::class, 'ViewUbahPassword']);
Route::post('/UbahPasswordPengajar/update', [UbahProfilController::class, 'UpdateUbahPassword'])->name('updatepassword');
Route::any('/JadiPengajar', [PengajarController::class, 'JadiPengajar'])->name('JadiPengajar');
Route::post('/form-review', [PelajarController::class, 'store'])->name('form-review');
Route::get('/DetailPengajar', [GuruController::class, 'show'])->name('DetailPengajar.show');
Route::post('/DetailPengajar/{guru_id}/upload', [GuruController::class, 'store'])->name('DetailPengajar.store');
Route::get('/payment/qris', [ipaymuController::class, 'initiateQrisPayment'])->name('payment.qris');
Route::get('/payment/qris/callback', [ipaymuController::class, 'qrisPaymentCallback'])->name('payment.qris.callback');
Route::get('/ReqKelasPayment', function () {
    return view('Pelajar.RequestKelasPayment');
});
Route::get('/FormTerima', [PengajarController::class, 'FormLink'])->name('FormTerima');
Route::get('/CaraKerjaPelajar', function () {
    return view('caraKerjaPelajar');
});
Route::get('/CaraKerjaPengajar', function () {
    return view('caraKerjaPengajar');
});
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::post('submit-meeting', [LinkController::class, 'submitMeeting'])->name('submitMeeting');

// Route::get('/ReqKelasConfirm', function () {
//     return view('Pelajar.RequestKelasConfirm');
// });

// Route::get('/ReqKelasSchedule', function () {
//     return view('Pelajar.RequestKelasSchedule');
// });
// Route::get('/riwayatpengajar/{id}', [PengajarController::class, 'riwayatpengajar'])->name('riwayatpengajar.show');

// Route::get('/DetailPengajar', [GuruController::class, 'showall'])->name('DetailPengajar.showall');
// ROUTER BENAR


// Route::get('/riwayatpengajar', [PengajarController::class, 'riwayatpengajar'])->name('riwayatpengajar');


// dasboard perlu di benarkan
// Route::get('/dashboard', function () {
//     return view('welcome');
// });

// Route::get('/detail1', function () {
//     return view('detail1');
// });

// Route::get('/DetailPengajar', function () {
//     return view('DetailPengajar');
// });



// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/landing', function () {
//     return view('landing');
// });

// Route::get('/riwayatpengajar', function () {
//     return view('ktks');
// });

// Route::get('/riwayatpengajar2', function () {
//     return view('rr');
// });

// Route::get('/dashboardPengajar', function () {
//     return view('dashboardPengajar');
// });

// Route::get('/detail1', function () {
//     return view('detail1');
// });

// Route::post('/form-review', [PelajarController::class, 'store'])->name('form-review');

// Route::get('/DetailPengajar/{guru_id}', [GuruController::class, 'show'])->name('DetailPengajar.show');
// Route::post('/DetailPengajar/{guru_id}/upload', [GuruController::class, 'store'])->name('DetailPengajar.store');

// Route::get('/DetailPengajar', [GuruController::class, 'showall'])->name('DetailPengajar.showall');

// Route::get('/UbahProfilPelajar', function () {
//     return view('UbahProfilPelajar');
// });

// Route::get('/DetailReqMengajar', function () {
//     return view('Pengajar.DetailPermintaanMengajar');
// });

// Route::get('/FormZoom', function () {
//     return view('Pengajar.FormZoomAfterAccept');
// });

// Route::get('/Konfirm', function () {
//     // dd(session())
//     return view('Pengajar.KonfirmasiPermintaanMengajar', compact('request'));
// });





// DetailPengajar
// agustinus
// Detail1
// Route::get('/register', [AuthController::class, 'register']);
// Route::get('/login', function () {
//     return view('login');
// });
// Auth::routes();
// Route::get('/riwayatpengajar', function () {
//     return view('ktks');
// });

// Route::get('/riwayatpengajar2',function() {
//     return view('rr');
// });


// yohhhhh
// UbahProfilPengajar

// DetailPengajar
// Route::get('/DetailPengajar', function () {
//     return view('DetailPengajar');
// });


// Route::post('/detail1', function (Request $req) {
//     dd($req->all());
//     return view('detail1');
// });
// DetailPengajar.show

// agustinus
// Detail1

// yohhhhh
// UbahProfilPengajar


// Route::post('/submit-meeting', [LinkController::class, 'submitMeeting'])->name('submitMeeting');
// Route::get('submit-meeting', [LinkController::class, 'submitMeeting'])->name('submitMeeting');
