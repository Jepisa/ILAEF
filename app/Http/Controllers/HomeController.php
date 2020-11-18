<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Entity;

class HomeController extends Controller
{
    public function __invoke()
    {

        $untilLastEightNews = News::untilLastEightNews();
        
        if ( $untilLastEightNews->count() >= 1 ){
            return view('home', 
            ['news' => $untilLastEightNews]);
        } else {
            return view('home');
        }
    }
}
