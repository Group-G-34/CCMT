<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teethabit extends Controller
{
    function emo(){
        return view('barry',['name'=>"emo_15"]);
    }
}
