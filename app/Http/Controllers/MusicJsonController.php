<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Classes\JsonParser;
use Illuminate\Routing\Controller;

class MusicJsonController extends Controller
{
    //storage/app/json
    public function show()
    {
        $getFormMass = JsonParser::getFormattedMass();  

        return view('apps.music.show', $getFormMass);
    }
}
