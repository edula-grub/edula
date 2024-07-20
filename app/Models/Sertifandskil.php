<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sertifandskil extends Model
{
    use HasFactory;

    protected $fillable = [
        'guru_id', 'nama', 'distributor', 'skill', 'level', 'status', 'image'
    ];

    protected $casts = [

    ];

    public function guru(){
        return $this->belongsTo(Guru::class);
    }
}
