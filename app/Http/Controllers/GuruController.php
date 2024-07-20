<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Sertifandskil;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function show(int $guruId){
    $guru = Guru::findOrFail($guruId);

    $sertif = Sertifandskil::where('guru_id', $guruId)->get();
    return view('DetailPengajar', compact('guru', 'sertif'));
    }

    public function showall(){
        $sertif = Sertifandskil::all();
        return view('DetailPengajar', compact('sertif'));
    }

    public function store(Request $request, $guruId)
    {
        // $request->validate([
        //     'guru_id' => 'required',
        //     'nama' => 'required',
        //     'distributor' => 'required',
        //     'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        // ]);

        $guru = Guru::where('user_id', $guruId);
        // dump($guruId);
        if(!$guru->first()){
            return response()->json(['message' => 'Guru not found'], 404);
        }else{
            if($request->hasFile('img')){
                $request->file('img')->move('img',$request->file('img')->getClientOriginalName());
            }
            // dd($request->all());
            // dd($request->file('img')->getClientOriginalName());
            // $data = [
            //     'guru_id' => $guru->first()->id,
            //     'nama'=> $request->nama,
            //     'distributor'=> $request->distributor,
            //     "skill" => "DEMO",
            //     "level" => "123",
            //     'image' => $request->file('img')->getClientOriginalName(),
            //     'status' => 'pending',
            // ];
            // dd($data);
            $sertif = Sertifandskil::create([
                'guru_id' => $guru->first()->user_id,
                'nama'=> $request->nama,
                'distributor'=> $request->distributor,
                "skill" => "DEMO",
                "level" => "123",
                'status' => 1,
                'image' => $request->file('img')->getClientOriginalName(),
            ]);
    }
}
}
