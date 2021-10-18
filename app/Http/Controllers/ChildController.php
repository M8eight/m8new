<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use DOMDocument;

class ChildController extends Controller
{

    public function show($page = 1)
    {

        $doc = new DomDocument('1.0', 'UTF-8');

        if ($page == 1) {

            $html = file_get_contents('https://javasea.ru/kartinki-na-telefon/malyshi/');
            @$res = $doc->loadHTML($html);
            if ($res) {
                $tags = $doc->getElementsByTagName('img');
                $mass = array();
                foreach ($tags  as $input) {

                    if ($input->hasAttribute('src'))

                        if ($rest = substr($input->getAttribute('src'), 0, 15)  == '/uploads/posts/') {
                            $mass[] = 'https://javasea.ru' . $input->getAttribute('src');
                        }
                }
            }
            $mass = array_slice($mass, 1);

        } elseif ($page = 2) {

            $html = file_get_contents('https://javasea.ru/kartinki-na-telefon/malyshi/page/2/');
            @$res = $doc->loadHTML($html);
            if ($res) {
                $tags = $doc->getElementsByTagName('img');
                $mass = array();
                foreach ($tags  as $input) {
                    if ($input->hasAttribute('src'))
                        if ($rest = substr($input->getAttribute('src'), 0, 15)  == '/uploads/posts/') {
                            $mass[] = 'https://javasea.ru' . $input->getAttribute('src');
                        }
                }
            }
            $mass = array_slice($mass, 1);

        } elseif ($page = 3) {

            $html = file_get_contents('https://javasea.ru/kartinki-na-telefon/malyshi/page/3/');
            @$res = $doc->loadHTML($html);
            if ($res) {
                $tags = $doc->getElementsByTagName('img');
                $mass = array();
                foreach ($tags  as $input) {
                    if ($input->hasAttribute('src'))
                        if ($rest = substr($input->getAttribute('src'), 0, 15)  == '/uploads/posts/') {
                            $mass[] = 'https://javasea.ru' . $input->getAttribute('src');
                        }
                }
            }
            $mass = array_slice($mass, 1);

        }

        return view('apps.child.show', compact('mass'));

    

    }
}
