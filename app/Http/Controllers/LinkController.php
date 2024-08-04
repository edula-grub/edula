<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Bidrequest;
use Illuminate\Support\Facades\Http;

class LinkController extends Controller
{
    public function submitMeeting(Request $request)
    {

        DB::table('biderlists')->insert([
            'guru_id' => session('gurus')->id,
            'bidrequest_id' => $request->input('idnya'),
            'harga' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // dd($bidrequest);
        return redirect('/Rom?s=' . $request->input('idnya'));
    }
}
