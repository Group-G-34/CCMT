<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\patientcontroller;
use App\Http\Controllers\userscontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\fundscontroller;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\paycontroller;
use App\Http\Controllers\profilecontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//working with the views
Route::get('/', function () {
    return view('homepage');
});

Route::get('funds',function(){
    return view('/admin/funds');
});
Route::get('reg',function(){
    return view('/admin/register');
});
Route::get('pat',function(){
    return view('/admin/patient');
});
Route::get('pay',function(){
    return view('/admin/pay');
});
//layout1
Route::get('layout1',function(){
    return view('layout1');
});
//routing the admin view
Route::get('profile',function(){
    return view('profile');
});

Route::get('profile',[profilecontroller::class,'getad']);
Route::get('users',[profilecontroller::class,'getad']);
//...admin view...//

//working with the login page 
Route::get('login',function(){
    return view('users');
});

// routing for the users.blade.php
Route::post('users',[userscontroller::class,'getdata']);
Route::get('users',[userscontroller::class,'getdata']);
//..users.blade.php

Route::get('users',function(){
    if(session()->has('user'))
    {
        return redirect('profile');
    }
    return view('users');
});


//.. working with the login page.....//

//logout page
/*Route::get('/logout',function(){
    if(session()->has('user'))
    {
        session()->pull('users');
    }
    return redirect('users');
});*/
//..logout page..//


Route::get('patient',[patientcontroller::class,'loadpatient']);



//working with the home page
Route::view('homepage','home');
Route::get('home',[homecontroller::class,'loadview']);


// working with the funds page
Route::get('funds',[fundscontroller::class,'getfunds']);
Route::post('funds',[fundscontroller::class,'getfunds']);

//working with the register health officer page
Route::get('register',[registercontroller::class,'barry']);
Route::post('register',[registercontroller::class,'barry']);


Route::get('pay',[paycontroller::class,'pay']);
//routing the layouts page
Route::get('layout',function(){
    return view('layouts');
});