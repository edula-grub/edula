<?php

namespace App\Http\Controllers;

use App\Models\RatingAndReview;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Review; // Add this line to import the Review class

class PelajarController extends Controller
{
    public function store(Request $request){
        // dd($request->all());
        $review = new RatingAndReview();
        $review->rating = $request->input('rating');
        $review->name = $request->input('name');
        $review->mataPelajaran = $request->input('mataPelajaran');
        $review->review = $request->input('review');
        $review->save();

        return redirect()->back()->with('success', 'Form submitted successfully!');
        // return redirect()->back();
    }
}
