<?php

namespace App\Http\Controllers\scrapings;

use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class ScrapingCnn
{
    public function scrapingCnn()
    {

        $client = new Client();
        $crawler = $client->request('GET', 'https://www.cnnbrasil.com.br/tudo-sobre/turismo/');

        $artigos = [];

        $crawler->filter('ul.home__new li.home__list__item')->each(function (Crawler $noticias) use (&$artigos) {

            $artigo = [];

            $artigo['link'] = $noticias->children()->first()->attr('href');
            $artigo['titulo'] = $noticias->filter('div.home__list__news div.home__list__tag h2')->text();
            $artigo['img'] = $noticias->filter('a.home__list__tag picture img')->attr('src');
            $artigo['time'] = $noticias->filter('div.latest__news__infos')->text();

            $artigos[] = $artigo;
        });
        return $artigos;
    }
}
