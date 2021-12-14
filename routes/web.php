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

Route::get('/', 'App\Http\Controllers\MainController@getIndex');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Route::post('send-contact','Controller@contact')->name('send-contact');

Route::post('search','App\Http\Controllers\MainController@search')->name('search');

Route::get('/{slug}','App\Http\Controllers\MainController@direction');