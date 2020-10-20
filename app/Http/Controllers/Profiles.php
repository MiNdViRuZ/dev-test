<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Profiles extends Controller
{
    //
    function list()
    {
        $data =  Http::get('https://rickandmortyapi.com/api/character')->json();
        return view('profiles',['data'=>$data]);
    }
}
