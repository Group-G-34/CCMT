<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userscontroller extends Controller
{
   function getdata(Request $req)
 {
    $req->validate([
        'username' => 'required | max:10',
        'password' => 'required | min:5'
    ]);
    session()->put('user',$req['user']);  
    return view('homepage'); 
  }
 
}
