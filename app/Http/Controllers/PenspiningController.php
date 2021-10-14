<?php

namespace App\Http\Controllers;

use App\Models\Penspining;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Symfony\Component\DomCrawler\Crawler;

class PenspiningController extends Controller
{



    public static function getCrawler($url, $filter, $eloquentQuery = false)
    {
        $mass = array();

        $getHtml = file_get_contents($url);
        $crawler = new Crawler($getHtml);
        $crawler = $crawler->filter($filter);

        if ($eloquentQuery) {
            foreach ($crawler as $dom) {
                $mass[]['name'] = $dom->nodeValue;
            }
        } else {
            foreach ($crawler as $dom) {
                $mass[] = $dom->nodeValue;
            }
        }

        return $mass;
    }

    public function show()
    {

        $page1 = self::getCrawler(
            'https://penspinning.kz/publ/pen_spinning/spisok_trjukov_v_penspinning_chast_1/4-1-0-25',
            '.post-message li'
        );

        $page2 = self::getCrawler(
            'https://penspinning.kz/publ/pen_spinning/spisok_trjukov_v_penspinning_chast_2/4-1-0-27',
            '.post-message li'
        );

        $psPaginate = Penspining::paginate(50);
        $psPaginate->withPath('/pentrick/show');

        return view('apps.penspining.show', compact('psPaginate'));

    }

    public function sendToDatabaseOne()
    {

        $page1 = self::getCrawler(
            'https://penspinning.kz/publ/pen_spinning/spisok_trjukov_v_penspinning_chast_1/4-1-0-25',
            '.post-message li',
            true
        );

        Penspining::insert($page1);

        dump('Success send data to db one list');
    }

    public function sendToDatabaseTwo()
    {

        $page2 = self::getCrawler(
            'https://penspinning.kz/publ/pen_spinning/spisok_trjukov_v_penspinning_chast_2/4-1-0-27',
            '.post-message li',
            true
        );

        Penspining::insert($page2);

        dump('Success send data to db two list');
    }
}
