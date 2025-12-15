<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AchievementController extends Controller
{
    public function index()
    {
        $achievements = Achievement::orderBy('achievement_date', 'desc')
            ->paginate(9);

        return view('achievement.index', [
            'title' => 'Prestasi',
            'achievements' => $achievements
        ]);
    }

    public function show($id)
    {
        $achievement = Achievement::findOrFail($id);

        return view('achievement.detail', [
            'title' => 'Detail Prestasi',
            'achievement' => $achievement
        ]);
    }
}
