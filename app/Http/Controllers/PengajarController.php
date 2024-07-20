<?php

namespace App\Http\Controllers;

use App\Models\RatingAndReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengajarController extends Controller
{
    // public function index(){
    //     $reviews = RatingAndReview::all();
    //     return view('ktks', compact('reviews'));
    // }

    // public function show($id){
    //     $review = RatingAndReview::findOrFail($id);
    //     return view('ktks', compact('review'));
    // }

    public function index(){

    }

    public function riwayatpengajar(){
        // Ambil semua ulasan
        $reviews = DB::table('bidrequests')->get();

        // Hitung rata-rata rating
        $averageRating = $reviews->avg('rating_siswa_ke_guru');

        // Total reviews
        $totalReviews = $reviews->count();

        // Hitung jumlah ulasan untuk setiap bintang
        $ratingsCount = [
            5 => $reviews->where('rating_siswa_ke_guru', 5)->count(),
            4 => $reviews->where('rating_siswa_ke_guru', 4)->count(),
            3 => $reviews->where('rating_siswa_ke_guru', 3)->count(),
            2 => $reviews->where('rating_siswa_ke_guru', 2)->count(),
            1 => $reviews->where('rating_siswa_ke_guru', 1)->count(),
        ];

        $reviews = DB::table('bidrequests')
        ->where('guru_id', 2)
        ->join('users', 'bidrequests.siswa_id', '=', 'users.id')
        ->select('bidrequests.*','users.name')
        ->get();
        // dd($reviews->all());
        return view('ktks', compact('averageRating', 'totalReviews', 'ratingsCount', 'reviews'));
    }
}
