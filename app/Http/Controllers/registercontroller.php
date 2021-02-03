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
 protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'NIN' => 'required|min:14|max:14|confirmed',
            'contact'=>'required|min:11|max:11'
        ]);
 
}

}