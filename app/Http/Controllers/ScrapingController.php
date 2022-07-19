<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;

class ScrapingController extends Controller
{
    public function noticias(Request $request)
    {
        $cliente = new Client();
        $crawler = $cliente->request('GET', 'https://g1.globo.com/turismo-e-viagem/');

        $artigos = [];

        $crawler->filter('div.bastian-feed-item')->each(function (Crawler $noticia) use (&$artigos) {
            $artigos = [];

            $artigos['id'] = $noticia->filter('div.feed-post')->first()->attr('id');
            $artigos['titulos'] = $noticia->filter('div.feed-post-body-title')->first();
            $artigos['link'] = $noticia->filter('a')->first()->attr('href');
            $artigos['noticias'] = $noticia->filter('div.feed-post-body div.feed-post-body-resumo');
            $artigos['img'] = $noticia->filter('div.feed-post-body img')->first()->attr('src');
            $artigos['time'] = $noticia->filter('div.feed-post-metadata');

            $artigos[] = $artigos;
        });
        //dd($artigos);

        return view('noticias', compact('artigos'));
    }
}
