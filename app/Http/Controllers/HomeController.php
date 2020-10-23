<?php

namespace App\Http\Controllers;

use App\Models\News;

class HomeController extends Controller
{
    public function __invoke()
    {

        $untilLastEightNews = News::untilLastEightNews();

        if ( $untilLastEightNews->count() >= 1 ){
            return view('welcome', ['news' => $untilLastEightNews]);
        } else {
            return view('welcome');
        }
    }
}
