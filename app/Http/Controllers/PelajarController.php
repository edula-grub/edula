<?php

namespace App\Http\Controllers;

use App\Models\RatingAndReview;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Models\Bidrequest;
use App\Review; // Add this line to import the Review class

class PelajarController extends Controller
{

    public function store(Request $request){
        // dd($request->all());
        // $review = new RatingAndReview();
        // $review->rating = $request->input('rating');
        // $review->name = $request->input('name');
        // $review->mataPelajaran = $request->input('mataPelajaran');
        // $review->review = $request->input('review');
        // $review->save();

        // 'siswa_id', 'guru_id', 'nama_mapel', 'deskripsi_kebutuhan', 'jadwal', 'harga_bider_terpilih', 'status', 'review', 'komentar_guru_ke_siswa', 'komen_siswa_ke_guru', 'rating_guru_ke_siswa', 'rating_siswa_ke_guru', 'taskpoinlain', 'zoomlink',
        // dd($request->all());
        $review = Bidrequest::create([
            'siswa_id' => 2,
            'guru_id' => 2,
            'nama_mapel' => $request->input('nama_mapel'),
            'deskripsi_kebutuhan' => "DEMO",
            'jadwal' => now(),
            'harga_bider_terpilih' => 100,
            'status' => "DEMO",
            'review' => "DEMO",
            'komentar_guru_ke_siswa' => "DEMO",
            'komen_siswa_ke_guru' => $request->input('komen_siswa_ke_guru'),
            'rating_guru_ke_siswa' => 1,
            'rating_siswa_ke_guru' => $request->input('rating_siswa_ke_guru'),
            'taskpoinlain' => "DEMO",
            'zoomlink' => "DEMO",
        ]);

        return redirect()->back()->with('success', 'Form submitted successfully!');
        // return redirect()->back();
    }
}
