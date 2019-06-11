<?php

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

Route::get('/','MainController@index');
Route::get('logout','MainController@logout');
Route::get('index','MainController@index');
Route::get('login',function(){return view('login');});
Route::get('modificari',function(){return view('modificari');});
Route::get('admin',function(){return view('admin');});
Route::get('upload',function(){return view('upload');});
Route::any("store",'MainController@store');
Route::any("cautare",function(){return view('cautare');});
Route::any("p_video",function(){return view('p_video');});
Route::any("p_baza",function(){return view('p_baza');});
Route::any("p_sunet",function(){return view('p_sunet');});
Route::get('show/{id}','MainController@show');
Route::get("edit/{id}",'MainController@edit');
Route::any("update/{id}",'MainController@update');
Route::get("delete/{id}",'MainController@delete');

