<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paycontroller extends Controller
{
    function pay(){
        return view('/admin/pay');
    }
}
