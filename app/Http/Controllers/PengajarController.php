<?php

namespace App\Http\Controllers;

use App\Models\RatingAndReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengajarController extends Controller
{


    public function JadiPengajar(Request $request)
    {
        // if (session('gurus')) {
        //     $siswa = session('siswa');
        //     session('tempsiswa', $siswa);
        //     session()->forget('siswa');


        //     return redirect('/DetailPengajar');
        // }

        if ($request->isMethod('post')) {
            $pat = [
                'user_id' => session('siswa')->id,
                'porfolio' => $request->portofolio,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            DB::table('gurus')->insertGetId($pat);
            $data = DB::table('guru_aktif')
                ->where('id', session('siswa')->id)->first();
            session(['gurus' => $data]);


            //save 'siswa' session data temporarily and forget 'siswa' session
            // $siswa = session('siswa');
            // session(['tempsiswa' => $siswa]);
            // session()->forget('siswa');
        }
        return view('Pengajar.JadiPengajar');
    }

    public function riwayatpengajar()
    {
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
            ->select('bidrequests.*', 'users.name')
            ->get();
        // dd($reviews);
        return view('ktks', compact('averageRating', 'totalReviews', 'ratingsCount', 'reviews'));
    }

    public function switchToPelajar()
    {
        if (session('gurus')) {
            // save current 'gurus' session data temporarily
            $gurus = session('gurus');
            session(['tempgurus' => $gurus]);
            session()->forget('gurus');

            // Restore 'siswa' session data
            if (session('tempsiswa')) {
                $siswa = session('tempsiswa');
                session(['siswa' => $siswa]);
                session()->forget('tempsiswa');
            }
        }

        return redirect('/dashboard');
    }

    public function switchToPengajar()
    {
        if (session('siswa')) {
            // save current 'siswa' session data temporarily
            $siswa = session('siswa');
            session(['tempsiswa' => $siswa]);
            session()->forget('siswa');

            // Restore 'gurus' session data
            if (session('tempgurus')) {
                $gurus = session('tempgurus');
                session(['gurus' => $gurus]);
                session()->forget('tempgurus');
            }
        }

        return redirect('/DetailPengajar');
    }
}
