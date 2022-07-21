<?php

namespace App\Http\Controllers;

use App\Http\Controllers\scrapings\ScrapingCnn;
use App\Http\Controllers\scrapings\ScrapingG1;

class ScrapingController extends Controller
{
    public function index()
    {
        $artigos = [];

        $classCnn = new ScrapingCnn();
        $cnn = $classCnn->scrapingCnn();

        for ($i = 0; $i < count($cnn); $i++){
            $artigos[] = $cnn[$i];
        }

        $classG1 = new ScrapingG1();
        $g1 = $classG1->scrapingG1();

        for ($i = 0; $i < count($g1); $i++){
            $artigos[] = $g1[$i];
        }

        return view('noticias', compact('artigos'));
    }
}
