<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;


class AnecdotesController extends Controller
{

    public function show()
    {
        // include "/vendor/autoload.php";
        $getFile = file_get_contents('https://www.anekdot.ru/');
        $crawler = new Crawler($getFile);
        $crawler = $crawler->filter('.text');

        $mass = array();

        foreach ($crawler as $dom) {
            $mass[] = $dom->nodeValue;
        }

        return view('apps.anekdotes.show', compact('mass'));

    }
}
