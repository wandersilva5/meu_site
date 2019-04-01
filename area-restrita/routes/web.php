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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@index')->name('home');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'menu'], function (){
    Route::get('/', 'MenuController@index')->name('menu.index');
    Route::get('index', 'MenuController@index')->name('menu.index');
    Route::get('create', 'MenuController@add')->name('menu.create');
    Route::post('{id}/edit', 'MenuController@edit')->name('menu.edit');
    Route::post('{id}/update', 'MenuController@update')->name('menu.update');
    Route::post('{id}/destroy', 'MenuController@destroy')->name('menu.destroy');    
});
