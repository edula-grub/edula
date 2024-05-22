<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biderlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'bidrequest_id', 'guru_id', 'zoomlink',
    ];

    protected $casts = [

    ];
}
