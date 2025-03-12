<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    // Kolom-kolom yang diizinkan untuk mass assignment
    protected $fillable = [
        'foto1',
        'foto2',
        'foto3',
        'title',
        'content',
        'published_at',
    ];
}
