<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biderlist;
use Illuminate\Support\Facades\Http;
use App\Models\Bidrequest;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = Bidrequest::where('nama_mapel', 'LIKE', "%{$query}%")
            ->orWhere('harga_bider_terpilih', 'LIKE', "%{$query}%")
            ->orWhere('jadwal', 'LIKE', "%{$query}%")
            ->get();

        return response()->json($results);
    }
}
