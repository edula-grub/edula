<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidrequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'siswa_id', 'guru_id', 'nama_mapel', 'deskripsi_kebutuhan', 'jadwal', 'biderprice', 'status', 'review', 'gtos', 'stog', 'gsts', 'sstg', 'etc',
    ];

    protected $casts = [

    ];
}
