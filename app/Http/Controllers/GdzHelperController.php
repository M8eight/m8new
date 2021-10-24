<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DOMDocument;

class GdzHelperController extends Controller
{

    public function show($imageMass = null)
    {
        return view('apps.gdz_helper.show', compact('imageMass'));
    }

    public function handler(Request $req)
    {

        $book = $req->book;
        $number = $req->number;
        $number = explode(' ', $number);
        $numberOne = $number[0];
        @$numberVar = $number[1];
        $doc = new DomDocument('1.0', 'UTF-8');

        switch ($book) {
            case 'eng9':
                $href = "https://gdz.ru/class-9/english/starlight-baranova/$numberOne-s/";
                break;

            case 'alg9':
                $href = "https://gdz.ru/class-9/algebra/dorofeev/$numberOne-nom/";
                break;

            case 'his9':
                $href = "https://gdz.ru/class-9/istoriya/arsentjev/$numberOne-item/";
                break;

            case 'obs9':
                $href = "https://gdz.ru/class-9/obshhestvoznanie/bogolyubov/$numberOne-item/";
                break;

            default:
                $href = null;
                break;
        }

        @$html = file_get_contents($href);

        if ($html == null) {
            session()->flash('danger');
            return redirect()->route('apps-gdz_helper');
        }

        @$res = $doc->loadHTML($html);
        if ($res) {
            $tags = $doc->getElementsByTagName('img');
            $mass = array();
            foreach ($tags  as $input) {
                if ($input->hasAttribute('src')) {
                    if (substr($input->getAttribute('src'), 0, 32) == '//gdz.ru/attachments/images/task') {
                        $mass[] = 'https:' . $input->getAttribute('src');
                    }
                }
            }
        }

        return $this->show($mass);
    }
}
