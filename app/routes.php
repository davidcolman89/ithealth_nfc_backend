<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('demo/{id_chip}/chip', ['uses'=>'DemoController@getInfoByChip','as'=>'demo.chip']);

Route::resource('demo','DemoController');