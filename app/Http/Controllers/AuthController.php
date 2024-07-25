<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function Login(Request $request){
        return view('login');
    }
    function ValidateLogin(Request $request){
        // dd($request->all());
        // return "Login Berhasil";
        $user = User::where('name', $request->USERNAME)->first();
        if($user && Hash::check($request->PASSWORD, $user->password)){
            session(['user' => $user]);
            return redirect('/dashboard');
        } else {
            return redirect('/login')->with('faill', 'Invalid Username or Password');
        }
        // hash::match($request->password, $user->password);
        // dd($request->all());
    }
    public function ValidateRegister(Request $request){
        $validator = Validator::make($request->all(), [
            'USERNAME' => ['required', 'string', 'max:255'],
            'EMAIL' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'PASSWORD' => ['required', 'string', 'min:8'],
        ]);
        if ($validator->fails()) {
            return redirect('/login#sign-up-btn')->with('failr', 'Invalid Username or Password');
        }
        $data = $request->all();
        $check = $this->create($data);
        return back()->with('success', 'You have signed-in');
    }

    public function create(array $data){
        return User::create([
            'name' => $data['USERNAME'],
            'email' => $data['EMAIL'],
            'password' => Hash::make($data['PASSWORD']),
        ]);
    }
}
