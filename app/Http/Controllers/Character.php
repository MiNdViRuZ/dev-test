<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Character extends Controller
{
    //
    function list($value)
    {
        $url = 'https://rickandmortyapi.com/api/character/';
        $data =  Http::get($url)->json();
        return view('character',['data'=>$data]);

    }
}
