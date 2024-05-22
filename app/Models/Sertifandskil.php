<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifandskil extends Model
{
    use HasFactory;

    protected $fillable = [
        'guru_id', 'sertifdoc', 'credensial', 'skil', 'level', 'approved',
    ];

    protected $casts = [
        'skil' => 'collection',
    ];
}
