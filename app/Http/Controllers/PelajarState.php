<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelajarState extends Controller
{

    // request to gpt-3
    function gpt() {
        return 'bisa';
    }
    function ipaymu() {
        return 'upline';
    }

    function Stage1($request){
        if($request->isMethod('post')){
            $newrequest = [
                "tanggal"=>$request->input('tanggal'),
                "jam_mulai"=>$request->input('jam_awal'),
                "jam_selesai"=>$request->input('jam_selesai'),
                "gap"=> $request->input('jam_selesai') - $request->input('jam_awal'),
            ];
            session(['newrequest' => $newrequest]);
            return redirect('/ReqPelajaran?s=2');
        }
        return view('Pelajar.RequestKelasSchedule');
    }

    function Stage2($request){
        if($request->isMethod('post')){
            $newrequest = session('newrequest');
            $newrequest['pelajaran'] = $request->input('pelajaran');
            $newrequest['jenjang'] = $request->input('jenjang');
            $newrequest['deskripsi'] = $request->input('deskripsi');
            $newrequest['price'] = $request->input('price');
            session(['newrequest' => $newrequest]);
            if($this->gpt() == 'bisa'){
                return redirect('/ReqPelajaran?s=3');
            }else{
                dump('gpt-3 error');
            }
        }
        return view('Pelajar.RequestKelas3');
    }

    function Stage3($request){
        if($request->isMethod('post')){
            $newrequest = session('newrequest');
            $newrequest['metode_pembayaran'] = $request->input('metode_pembayaran');
            session(['newrequest' => $newrequest]);
            return redirect('/ReqPelajaran?s=4');
        }
        return view('Pelajar.RequestKelasPayment');
    }

    function Stage4(){
        return view('Pelajar.RequestKelasConfirm');
    }

    function BuatPenajuan(Request $request){
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
