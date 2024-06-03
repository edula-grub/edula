<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paymet extends Model
{
    use HasFactory;

    protected $fillable = [
        'total', 'status', 'method_id', 'user_id',
    ];

    protected $casts = [

    ];
}
