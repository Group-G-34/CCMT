<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registercontroller extends Controller
{
 function barry( Request $req){
    $data=$req->input('fname');
    $req->session()->flash('fname',$data);
     return view('/admin/register');
 }
 
}

