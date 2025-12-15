<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\News;
use App\Models\Paper;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = [
            [
                'title' => 'SMP & SMA Daarul Qur’an International Islamic Boarding School',
                'subtitle' => 'Mencetak generasi Qur’ani, berakhlak mulia, dan berwawasan global melalui pendidikan Islam terpadu.',
                'image' => 'images/Daqu1.jpg',
                'link' => null,
            ],
            [
                'title' => 'Pendidikan Qur’ani & Akademik Berimbang',
                'subtitle' => 'Perpaduan tahfidz Al-Qur’an, kurikulum nasional, dan kompetensi global dalam lingkungan boarding school.',
                'image' => 'images/Daqu2.jpg',
                'link' => null,
            ],
            [
                'title' => 'Berkarakter Islami, Siap Bersaing Global',
                'subtitle' => 'Membentuk siswa yang berprestasi, berakhlak, dan siap menghadapi tantangan dunia internasional.',
                'image' => 'images/Daqu3.jpg',
                'link' => null,
            ],
            [
                'title' => 'Lingkungan Islami & Pembinaan Intensif',
                'subtitle' => 'Sistem asrama dengan pendampingan guru dan musyrif berpengalaman untuk membentuk karakter mandiri.',
                'image' => 'images/Daqu4.jpg',
                'link' => null,
            ],
        ];

        return view('home', [
            'title' => "SMP-SMA Daarul Qur'an Internasional Boarding School",
            'latestNews' => News::orderBy('published_at', 'desc')->take(5)->get(),
            'latestAchievements' => Achievement::orderBy('achievement_date', 'desc')->take(5)->get(),
            'latestPapers' => Paper::orderBy('published_at', 'desc')->take(5)->get(),
            'sliders' => $sliders,
        ]);
    }
}
