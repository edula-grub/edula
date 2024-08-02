<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class PelajarState extends Controller
{

    function approve(Request $request)
    {
        DB::table('bidrequests')->where('id', $request->s)->update([
            'guru_id' => $request->g,
            'status' => 'LERNING',
            'zoomlink' => 'https://meet.google.com/landing'
        ]);
        return back();
    }
    function setpo(Request $request)
    {
        // save data to biderlists
        DB::table('biderlists')->insert([
            'guru_id' => session('gurus')->id,
            'bidrequest_id' => $request->s,
            'harga' => $request->harga,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // dd('berhasil');
        return back();
    }

    function AmbilKelas(Request $request)
    {
        $kelas = DB::table('bidrequests')->where('status', "OPENWAR")->get();
        // dd($kelas);
        return view('ambilKelas', compact('kelas'));
    }

    function Edetail(Request $request)
    {
        $Detail = DB::table('ALLWAR')
            // ->join('siswa_aktif', 'bidrequests.siswa_id', '=', 'siswa_aktif.id')
            ->join('guru_aktif', 'ALLWAR.guru_id', '=', 'guru_aktif.id')
            ->where('BRID', $request->s)
            ->first();
        // dd($Detail);

        empty($Detail) ? $Detail = DB::table('ALLWAR')->where('BRID', $request->s)->first() : null;

        $reqlist = DB::table('biderlists')
            ->join('guru_aktif', 'biderlists.guru_id', '=', 'guru_aktif.id')
            ->where('bidrequest_id', $request->s)
            ->get();

        // dd($reqlist);


        foreach ($reqlist as $key => $value) {
            $reviews = DB::table('bidrequests')->where('guru_id', $value->guru_id)->get();
            $averageRating = $reviews->avg('rating_siswa_ke_guru');
            $totalReviews = $reviews->count();
            $ratingsCount = [
                5 => $reviews->where('rating_siswa_ke_guru', 5)->count(),
                4 => $reviews->where('rating_siswa_ke_guru', 4)->count(),
                3 => $reviews->where('rating_siswa_ke_guru', 3)->count(),
                2 => $reviews->where('rating_siswa_ke_guru', 2)->count(),
                1 => $reviews->where('rating_siswa_ke_guru', 1)->count(),
            ];

            $reqlist[$key]->averageRating = $averageRating;
            $reqlist[$key]->totalReviews = $totalReviews;
            $reqlist[$key]->ratingsCount = $ratingsCount;
        }

        return view('Detail', compact('Detail', 'reqlist'));
    }

    function dashboard()
    {

        if (session('tempsiswa')) {



            $siswa = session('tempsiswa');
            session('siswa', $siswa);


            // handel for temp guru
            $guru = session('gurus');
            session('tempgurus', $guru);
            session()->forget('gurus');
        }

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


        $selesai = DB::table('bidrequests')->where('siswa_id', $siswaId)->where('status', 'DONE')->get();
        $tidakselesai = DB::table('bidrequests')->where('siswa_id', $siswaId)->where('status', '!=', 'DONE')->get();


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
        // dd($datalist);
        DB::table('bidrequests')->insert([
            'siswa_id' => session('siswa')->id,
            'nama_mapel' => $datalist['pelajaran'],
            'deskripsi_kebutuhan' => $datalist['deskripsi'],
            'jadwal' => $jadwal,
            'status' => 'OPENWAR',
            'harga_bider_terpilih' => $datalist['price'],
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
