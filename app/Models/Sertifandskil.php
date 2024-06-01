<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifandskil extends Model
{
    use HasFactory;

    protected $fillable = [
        'guru_id', 'dokumen_sertifikat', 'kredensial_sertifikat', 'skil', 'level', 'diterima_oleh_sistem',
    ];

    protected $casts = [

    ];
}
