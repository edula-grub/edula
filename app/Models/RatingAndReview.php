<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingAndReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'rating', 'name', 'mataPelajaran', 'review',
    ];

    public function guru(){
        return $this->belongsTo(Guru::class);
    }
}
