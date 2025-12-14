<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    // Kolom-kolom yang diizinkan untuk mass assignment
    protected $fillable = [
        'student_name',
        'achievement',
        'achievement_date',
        'foto1',
        'foto2',
        'keterangan',
    ];
}
