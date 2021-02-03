<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userscontroller extends Controller
{
   
   function getdata(Request $req)
  {
    //return view('users');
    
    $req->validate([
        'username' => 'required | max:10',
        'password' => 'required | min:5'
    ]);
/*
    $data=$req->input();
    $req->session()->put('user',$data['user']);
   */ 
    return view('profile');
  }
  
    
 }
