<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\App;
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
 

Route::get('/lang/{lang}', 'HomeController@translater');
Route::get('/api', 'HomeController@api');
 
        



Route::get('/', 'HomeController@index');
// Route::get('/find-us', 
Route::view('/find-us', 'findUs');
Route::view('/about-us', 'aboutUs');

Route::view('/team', 'team');

Route::view('/cpanel', 'cpanel/index');
// Route::view('/bookin', 'cpanel/index');
Route::view('/service', 'service');


/// this route for Appointment
Route::get('/bookingg', 'AppointmentController@index')->name('booking');
Route::post('/bookingg/search', 'AppointmentController@search');
Route::get('/booking/appointment/{appointment}', 'AppointmentController@show');
Route::post('/booking/appointment/{appointment}', 'AppointmentController@store');


Route::get('/news','NewsController@index' );

// this route for send doctor informtion to admin

Route::post('/doctor-send','RequestController@addDoctor');



// this route for controll news
Route::get('/cpanel/news', 'Cpanel\NewsController@index');
Route::get('/cpanel/news-add', 'Cpanel\NewsController@create');
Route::post('/cpanel/news-add/store', 'Cpanel\NewsController@store');
Route::get('/cpanel/news-edit/{news}', 'Cpanel\NewsController@edit');
Route::get('/cpanel/news-show/{news}', 'Cpanel\NewsController@show');
Route::post('/cpanel/news-edit/{news}/update', 'Cpanel\NewsController@update');

// this route for controll doctor
Route::get('/cpanel/doctor', 'Cpanel\DoctorController@index');