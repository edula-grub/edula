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

    public function store(Request $request, Guru $guruId)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $guru = Guru::findOrFail($guruId);

        if(!is_null($guru)){
            return response()->json(['message' => 'Guru not found'], 404);
        }

        $sertif = $guru->sertifandskil()->create([
            'guru_id' => $guruId,
            'nama' => $request->nama,
            'distributor' => $request->distributor,
        ]);

        return response()->json($sertif, 201);
    }
}
