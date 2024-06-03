<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidchat extends Model
{
    use HasFactory;

    protected $fillable = [
        'bidrequest_id', 'sender_id', 'reader_id', 'pesan',
    ];

    protected $casts = [

    ];
}
