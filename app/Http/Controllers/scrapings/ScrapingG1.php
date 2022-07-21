<?php

namespace App\Http\Controllers\scrapings;

use Symfony\Component\DomCrawler\Crawler;
use Goutte\Client;

class ScrapingG1
{
    public function scrapingG1()
    {
        $client = new Client();
        $crawler = $client->request('GET', 'https://g1.globo.com/turismo-e-viagem/');

        $artigos = [];

        $crawler->filter('div.bastian-feed-item')->each(function (Crawler $noticia) use (&$artigos) {

            $artigo = [];

            $artigo['link'] = $noticia->filter('a')->first()->attr('href');
            $artigo['titulo'] = $noticia->filter('div.feed-post-body-title')->first()->text();
            $artigo['img'] = $noticia->filter('div.feed-post-body img')->first()->attr('src');
            $artigo['time'] = $noticia->filter('div.feed-post-metadata')->text();

            $artigos[] = $artigo;
        });
        return $artigos;
    }
}
