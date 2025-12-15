<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('published_at', 'desc')
            ->paginate(12);

        return view('news.index', [
            'title' => 'Berita',
            'news'  => $news
        ]);
    }


    public function show($id)
    {
        $news = News::findOrFail($id);

        return view('news.detail', [
            'title' => $news->title,
            'news'  => $news
        ]);
    }
}
