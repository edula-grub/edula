<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UbahProfilController extends Controller
{
    function ViewUbahProfil(Request $request)
    {
        $datasiswa = session("siswa");
        // dd(session("siswa"));

        return view('UbahProfilPengajar', compact('datasiswa'));
    }

    function UpdateUbahProfil(Request $request)
    {
        $datasiswa = [
            'notelp' => $request->notelp,
            'tgl_lahir' => $request->bdaymonth,
            'gender' => $request->gender
        ];

        $datauser = [
            'name' => $request->namadepan . $request->namabelakang,
            'email' => $request->email
        ];

        DB::table('siswas')
            ->where('user_id', session("siswa")->id)
            ->update($datasiswa);

        DB::table('users')
            ->where('id', session("siswa")->id)
            ->update($datauser);

        $siswa = DB::table('siswa_aktif')
            ->where('id', session("siswa")->id)
            ->first();

        session(['siswa' => $siswa]);
        return back();
    }
}
