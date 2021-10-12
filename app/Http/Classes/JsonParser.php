<?php

namespace App\Http\Classes;

use Illuminate\Support\Facades\Storage;


class JsonParser
{

    public static function getJson()
    {
        $get = Storage::disk('json')->get('spotify.json');

        return $get;
    }

    public static function getMass()
    {
        $get = Storage::disk('json')->get('spotify.json');
        $mass = json_decode($get, true);
        
        return $mass;
    }

    public static function getFormattedMass($album_flag = false)
    {
        $get = Storage::disk('json')->get('spotify.json');
        $mass = json_decode($get, true);
        unset($mass['other'], $mass['bannedTracks'], $mass['episodes'], $mass['shows']);
        if($album_flag) {

        } else {
            unset($mass['albums']);
        }
        
        return $mass;
    }

}
