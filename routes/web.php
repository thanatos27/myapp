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

//Route::get('/', function () {
//    return view('welcome');
//});

// Home

/*
    名前付きルート
    https://laravel10.wordpress.com/2015/03/19/%E5%88%9D%E3%82%81%E3%81%A6%E3%81%AElaravel-5-24-named-route/
 */

Route::get('/', 'HomeController@show')->name('home');


Route::resource('/tasks', 'TasksController', ['only' => ['index', 'store', 'update', 'destroy', 'edit']]);

Route::get('/weather', 'ApiTestController@weather')->name('weather');
Route::get('/youtube', 'ApiTestController@youtube')->name('youtube');
