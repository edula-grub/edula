<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Sertifandskil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function show(Request $request)
    {
        $guruId = session('gurus')->id;
        $guru = DB::table('guru_aktif')->where('id', $guruId)->first();
        $sertif = DB::table('sertifandskils')->where('guru_id', $guruId)->get();

        // Ambil semua ulasan
        $reviews = DB::table('bidrequests')->where('guru_id', $guruId)->get();
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

        // dd($ratingsCount);

        $reviews = DB::table('bidrequests')
            ->where('guru_id', $guruId)
            ->join('users', 'bidrequests.siswa_id', '=', 'users.id')
            ->select('bidrequests.*', 'users.name')
            ->get();
        // dd($reviews);


        $selesai = DB::table('bidrequests')->where('guru_id', $guruId)->where('status', 'DONE')->get();
        $tidakselesai = DB::table('bidrequests')->where('guru_id', $guruId)->where('status', '!=', 'DONE')->get();


        return view('DetailPengajar', compact(
            'guru',
            'sertif',
            'averageRating',
            'totalReviews',
            'ratingsCount',
            'reviews',
            'selesai',
            'tidakselesai'
        ));
    }

    public function store(Request $request, $guruId)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required|string|max:255',
            'distributor' => 'required|string|max:255',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $guru = Guru::where('user_id', $guruId);
        // dump($guruId);
        if (!$guru->first()) {
            return response()->json(['message' => 'Guru not found'], 404);
        } else {
            if ($request->hasFile('img')) {
                $request->file('img')->move('img', $request->file('img')->getClientOriginalName());
            }
            $sertif = Sertifandskil::create([
                'guru_id' => $guru->first()->user_id,
                'nama' => $request->nama,
                'distributor' => $request->distributor,
                "skill" => "DEMO",
                "level" => "123",
                'status' => 1,
                'image' => $request->file('img')->getClientOriginalName(),
            ]);
        }
        return back();
    }
}
