<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class LinksController extends Controller
{

    public function show()
    {

        return view('links');

    }

}
