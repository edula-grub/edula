<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelajarState extends Controller
{
    function dashboard()
    {
        $siswaId = session('siswa')->id;
        $siswa = DB::table('siswa_aktif')->where('id', $siswaId)->first();
        $reviews = DB::table('bidrequests')->where('siswa_id', $siswaId)->get();
        $averageRating = $reviews->avg('rating_siswa_ke_guru');
        $totalReviews = $reviews->count();
        $ratingsCount = [
            5 => $reviews->where('rating_siswa_ke_guru', 5)->count(),
            4 => $reviews->where('rating_siswa_ke_guru', 4)->count(),
            3 => $reviews->where('rating_siswa_ke_guru', 3)->count(),
            2 => $reviews->where('rating_siswa_ke_guru', 2)->count(),
            1 => $reviews->where('rating_siswa_ke_guru', 1)->count(),
        ];


        $selesai = DB::table('bidrequests')->where('siswa_id', $siswaId)->where('status', 'SELESAI')->get();
        $tidakselesai = DB::table('bidrequests')->where('siswa_id', $siswaId)->where('status', '!=', 'SELESAI')->get();


        return view('Pelajar.DasboardPelajar', compact(
            'siswa',
            'reviews',
            'averageRating',
            'totalReviews',
            'ratingsCount',
            'reviews',
            'selesai',
            'tidakselesai'

        ));
    }

    // request to gpt-3
    function gpt()
    {
        return 'bisa';
    }
    function ipaymu()
    {
        return 'upline';
    }

    function CreteRequest($datalist)
    {

        $jadwal = date('Y-m-d H:i:s', strtotime($datalist['tanggal'] . ' ' . $datalist['jam_mulai']));
        $datalist['tanggal'] = $jadwal;
        DB::table('bidrequests')->insert([
            'siswa_id' => session('siswa')->id,
            'nama_mapel' => $datalist['pelajaran'],
            'deskripsi_kebutuhan' => $datalist['deskripsi'],
            'jadwal' => $jadwal,
            'status' => 'OPENWAR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    function Stage1($request)
    {
        if ($request->isMethod('post')) {
            $jam = explode('-', $request->input('jam'));
            $interval = (strtotime($jam[1]) - strtotime($jam[0])) / 3600;
            $newrequest = [
                "tanggal" => $request->input('tanggal'),
                "jam_mulai" => $jam[0],
                "jam_selesai" => $jam[1],
                "gap" => $interval,
            ];
            session(['newrequest' => $newrequest]);
            return redirect('/ReqPelajaran?s=2');
        }
        return view('Pelajar.RequestKelasSchedule');
    }

    function Stage2($request)
    {
        if ($request->isMethod('post')) {
            $newrequest = session('newrequest');
            $newrequest['pelajaran'] = $request->input('pelajaran');
            $newrequest['jenjang'] = $request->input('jenjang');
            $newrequest['deskripsi'] = $request->input('deskripsi');
            $newrequest['price'] = $request->input('harga');
            session(['newrequest' => $newrequest]);
            if ($this->gpt() == 'bisa') {
                return redirect('/ReqPelajaran?s=3');
            } else {
                dump('gpt-3 error');
            }
        }
        return view('Pelajar.RequestKelas3');
    }

    function Stage3($request)
    {
        if ($request->isMethod('post')) {
            $newrequest = session('newrequest');
            $newrequest['metode_pembayaran'] = $request->input('payment');
            session(['newrequest' => $newrequest]);
            return redirect('/ReqPelajaran?s=4');
        }
        return view('Pelajar.RequestKelasPayment');
    }

    function Stage4()
    {
        $datalist = session('newrequest');
        session()->forget('newrequest');
        $this->CreteRequest($datalist);
        return view('Pelajar.RequestKelasConfirm');
    }

    function BuatPenajuan(Request $request)
    {
        switch ($request->input('s')) {
            case '1':
                return $this->Stage1($request);
                break;
            case '2':
                return $this->Stage2($request);
                break;
            case '3':
                return $this->Stage3($request);
                break;
            case '4':
                return $this->Stage4($request);
                break;
            default:
                return view('Pelajar.RequestKelas');
                break;
        }
    }
}
