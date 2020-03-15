<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/info','ApiController@index')->name('info.all');
Route::PUT('/update/{id}','UpdateController@update')->name('info.update');
Route::get('/edit/{id}','UpdateController@edit')->name('info.edit');
Route::get('/','UpdateController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
