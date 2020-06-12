<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
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


Route::get('/', 'HomeController@index');
Route::view('/find-us', 'findUs');

Route::view('/cpanel', 'cpanel/index');
Route::view('/bookin', 'cpanel/index');

Route::view('/bookingg', 'booking/index');

Route::get('/news','NewsController@index' );

Route::get('/cpanel/news', 'Cpanel\NewsController@index');
Route::get('/cpanel/news-add', 'Cpanel\NewsController@create');
Route::post('/cpanel/news-add/store', 'Cpanel\NewsController@store');
Route::get('/cpanel/news-edit/{news}', 'Cpanel\NewsController@edit');
Route::get('/cpanel/news-show/{news}', 'Cpanel\NewsController@show');
Route::post('/cpanel/news-edit/{news}/update', 'Cpanel\NewsController@update');

