<?php

namespace App\Http\Controllers;

use App\Models\News;

class HomeController extends Controller
{
    public function __invoke()
    {
        $news = News::orderBy('created_at', 'desc')->limit(8)->get();

        if ($news->count() > 0) {
            return view('home', compact('news'));
        } else {
            return view('home');
        }
    }
}
