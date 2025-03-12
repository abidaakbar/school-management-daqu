<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::latest()->take(3)->get(); // Menampilkan 3 berita terbaru
        return view('home', compact('news'));
    }
}
