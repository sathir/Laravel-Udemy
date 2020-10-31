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

Route::get('/',function(){

    return view('welcome');
});

Route::get('todos','TodosController@index');

Route::get('todos/{todo}', 'TodosController@show');

Route::get('create', 'TodosController@create');

Route::post('store', 'TodosController@store');

Route::get('todos/modify/{todo}', 'TodosController@modify');

Route::post('update/{todo}','TodosController@update');

Route::get('todos/delete/{todo}','TodosController@destroy');