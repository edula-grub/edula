<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paymethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_method', 'logo_payment_method', 'account_number',
    ];

    protected $casts = [

    ];
}
