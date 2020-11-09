<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BoredContoller extends Controller
{
    function list()
    {
        $data =  Http::get('https://www.boredapi.com/api/activity')
            ->json();

        return view('bored',['data'=> $data]);

    }
}
