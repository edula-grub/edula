<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    public function ViewUbahPassword()
    {
        return view('UbahPasswordPengajar');
    }

    public function UpdateUbahPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password_lama' => 'required',
            'password_baru' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $siswa = DB::table('users')
            ->where('id', session("siswa")->id)
            ->first();

        if (!Hash::check($request->password_lama, $siswa->password)) {
            return back()->withErrors(['password_lama' => 'Password lama tidak sesuai']);
        }

        DB::table('users')
            ->where('id', session("siswa")->id)
            ->update(['password' => Hash::make($request->password_baru)]);

        return back()->with('success', 'Password berhasil diubah');
    }
}
