<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class EschoolAvgController extends Controller
{
    public function show()
    {
        // Общее
        $getFile = Storage::disk('public')->get('es_avg/avg.html');

        // Список предметов
        $crawler = new Crawler($getFile);
        $crawler = $crawler->filter('.cell-text');
        $massName = array();

        foreach ($crawler as $dom) {
            $massName[] = $dom->nodeValue;
        }

        // Оценки
        $crawler = new Crawler($getFile);
        $crawler = $crawler->filter('.cell-num');
        $massAvg = array();

        foreach ($crawler as $dom) {
            $massAvg[] = $dom->nodeValue;
        }

        // Объединение
        foreach ($massName as $key => $value) {
            $massAll[$value] = $massAvg[$key];
        }

        // Среднее число
        $average = substr(collect($massAll)->average(), 0, 4);

        switch (substr($average, 0, 1)) {
            case 2:
                $track['key'] = 2;
                $track['class'] = 'text-danger';
                $track['description'] = 'Все печально';
                break;

            case 3:
                $track['key'] = 3;
                $track['class'] = 'text-danger';
                $track['description'] = 'Старайся лучше';
                break;
            
            case 4:
                $track['key'] = 4;
                $track['class'] = 'text-sucess';
                $track['description'] = 'Уже неплохо';
                break;

            case 5:
                $track['key'] = 5;
                $track['class'] = 'text-sucess';
                $track['description'] = 'Прекрасно';
                break;
        }
        
        return view('apps.eschool_avg.show', compact('massAll', 'average', 'track'));

    }
}
