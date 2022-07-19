<?php

namespace App\Http\Controllers\scarpings;

use App\Http\Controllers\Controller;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class ScrapingCnn extends Controller
{
    public function noticiasCnn()
    {
        $client = new Client();
        $crawler = $client->request('GET', 'https://www.cnnbrasil.com.br/tudo-sobre/turismo/');

        $artigos = [];

        $crawler->filter('ul.home__new li.home__list__item')->each(function (Crawler $noticias) use (&$artigos) {
            $artigos['link'] = $noticias->children()->first()->attr('href');
            $artigos['titulos'] = $noticias->filter('div.home__list__news div.home__list__tag h2')->text();
            $artigos['img'] = $noticias->filter('a.home__list__tag picture img')->attr('src');

            $artigos[] = $artigos;
        });

        return view('noticias', compact('artigos'));
    }
}
