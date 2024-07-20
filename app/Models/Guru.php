<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'porfolio',
    ];

    protected $casts = [

    ];

    public function reviews(){
        return $this->hasMany(RatingAndReview::class);
    }
}
