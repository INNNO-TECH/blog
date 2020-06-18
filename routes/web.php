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

Route::get('/vue', function () {
    return view('vue_tuto');
});

Route::get('/test', function () {
    return 'dsddassdf';
});


Route::get('/','PostController@index');
Route::post('/store','PostController@store');
Route::get('/delete/{id}','PostController@destroy');
Route::get('/edit/{id}','PostController@edit');
Route::post('/edit/{id}','PostController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// testing api call from web.php

Route::get('/test','PostController@test');
