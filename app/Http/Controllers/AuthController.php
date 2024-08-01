<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Siswa;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{

    // funtion agus
    public function Indexline1($data)
    {
        $submit = [
            'user_id' => $data->id,
            'jenjang_pendidikan' => 'Umum',
            'profile' => 'https://www.ybkb.or.id/wp-content/uploads/2024/03/8222_Y1ntt.jpg',
        ];
        $siswa = DB::table('siswas')->insert($submit);
    }
    function Login(Request $request)
    {

        // forget all session
        session()->forget('gurus');
        session()->forget('siswa');
        session()->forget('tempsiswa');
        session()->forget('tempguru');
        return view('login');
    }

    function ValidateLogin(Request $request)
    {
        $user = User::where('name', $request->USERNAME)->first();
        // dd($user->id);
        if ($user && Hash::check($request->PASSWORD, $user->password)) {
            $guru = DB::table('guru_aktif')->where('id', $user->id)->first();
            $siswa = DB::table('siswa_aktif')->where('id', $user->id)->first();
            // dd($siswa);
            if ($guru) {
                session(['gurus' => $guru]);
            }
            session(['siswa' => $siswa]);
            return redirect('/dashboard');
        } else {
            return redirect('/login')->with('faill', 'Invalid Username or Password');
        }
    }
    public function ValidateRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'USERNAME' => ['required', 'string', 'max:255'],
            'EMAIL' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'PASSWORD' => ['required', 'string', 'min:8'],
        ]);
        if ($validator->fails()) {
            return redirect('/login#sign-up-btn')->with('failr', 'Invalid Username or Password');
        }
        $data = $request->all();
        $data = User::create([
            'name' => $data['USERNAME'],
            'email' => $data['EMAIL'],
            'password' => Hash::make($data['PASSWORD']),
        ]);

        $this->Indexline1($data);
        // dd($data);
        return back()->with('success', 'You have signed-in');
    }

    public function logout(Request $request)
    {
        $request->session()->forget("pengajar");
        $request->session()->forget("pelajar");
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');

        // frank kita gapake auth jadi bisa forget session gurus dan siswa langsung aja
    }
}
