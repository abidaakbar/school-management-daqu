<?php

namespace App\Http\Controllers;

use App\Models\Paper;
use Illuminate\Http\Request;

class PapersController extends Controller
{
    public function index()
    {
        $papers = Paper::orderBy('published_at', 'desc')
            ->paginate(10);

        return view('papers.index', [
            'title' => 'Karya Tulis / Artikel Ilmiah',
            'papers' => $papers
        ]);
    }

    public function show(Paper $paper)
    {
        return view('papers.detail', [
            'title' => $paper->title,
            'paper' => $paper
        ]);
    }
}
