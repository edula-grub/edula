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
        // dd($request->all());
        // Validasi data

        // Simpan data ke database
        $bidrequest = DB::table('bidrequests')->where("id", $request->input('idnya'))
            ->update([
                'zoomlink' => $request->input('link'),
            ]);

        // dd($bidrequest);
        return redirect('/Rom?s=' . $request->input('idnya'));
    }
}
