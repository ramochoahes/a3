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

Route::get('/', 'ValController@getVal');
Route::get('index', 'ValController@getVal');
Route::get('site', 'ValController@returnSite');
Route::get('sitetwo', 'ValController@returnSiteTwo');
