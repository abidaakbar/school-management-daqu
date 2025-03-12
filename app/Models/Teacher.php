<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    // Kolom-kolom yang diizinkan untuk mass assignment
    protected $fillable = [
        'nama',
        'foto',
        'email',
        'no_telp',
        'jabatan',
    ];
}
