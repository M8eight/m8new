<?php

namespace App\Http\Controllers;

use Goutte\Client;
use App\Http\Classes\CurlParser;
use Illuminate\Routing\Controller;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;


class AnecdotesController extends Controller
{

    public function show()
    {
        
        include "C:/OpenServer/domains/m8new/vendor/autoload.php";
        $curl = file_get_contents('https://www.anekdot.ru/');
        $crawler = new Crawler($curl);
        $crawler = $crawler->filter('.text');

        $mass = array();

        foreach ($crawler as $dom) {
            $mass[] = $dom->nodeValue;
        }

        return view('apps.anekdotes.show', compact('mass'));

    }
}
