<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\patientcontroller;
use App\Http\Controllers\userscontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\fundscontroller;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\paycontroller;

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

Route::get('/', function () {
    return view('users');
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
Route::get('patient',[patientcontroller::class,'loadpatient']);
Route::post('users',[userscontroller::class,'getdata']);
Route::view('login','users');
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