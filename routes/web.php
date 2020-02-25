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



Route::get('/', function () {
   return view('welcome');
});
Route::get('cvs','cvController@index');
Route::get('cvs/create','cvController@create');
Route::post('cvs','cvController@store');
Route::get('cvs/{id}','cvController@update');
Route::get('cvs/{id}/edit','cvController@edit');
Route::get('cvs/{id}','cvController@destroy');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
