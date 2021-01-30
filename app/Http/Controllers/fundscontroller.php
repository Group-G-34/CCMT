<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fundscontroller extends Controller
{
 function getfunds( Request $req){
     $data=$req->input('donated_by');
     $req->session()->flash('donated_by',$data);
     return view('/admin/funds');
 }
}
