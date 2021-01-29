<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\patientcontroller;
use App\Http\Controllers\userscontroller;
use App\Http\Controllers\homecontroller;

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
Route::get('user1',[patientcontroller::class,'loadpatient']);
Route::post('users',[userscontroller::class,'getdata']);
Route::view('login','users');
Route::view('homepage','home');
Route::get('home',[homecontroller::class,'loadview']);