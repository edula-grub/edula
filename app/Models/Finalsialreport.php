<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finalsialreport extends Model
{
    use HasFactory;

    protected $fillable = [
        'task1', 'task5', 'task6', 'task2', 'task3', 'task4', 'task7',
    ];

    protected $casts = [

    ];
}
