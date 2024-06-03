<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paymethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_pembayaran', 'task1', 'task2',
    ];

    protected $casts = [

    ];
}
