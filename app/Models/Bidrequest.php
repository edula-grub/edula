<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidrequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'siswa_id', 'guru_id', 'nama_mapel', 'deskripsi_kebutuhan', 'jadwal', 'harga_bider_terpilih', 'status', 'review', 'komentar_guru_ke_siswa', 'komen_siswa_ke_guru', 'rating_guru_ke_siswa', 'rating_siswa_ke_guru', 'taskpoinlain', 'zoomlink',
    ];

    protected $casts = [

    ];
}
