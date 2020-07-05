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
Route::view('/yourHealth', 'yourHealth');

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

Route::post('/pharmacy-send','RequestController@addParmacy');

Route::post('/diag-send','RequestController@addDiag');

Route::post('/clinic-send','RequestController@addClinic');


Route::group(['prefix' => '/cpanel'], function () {


    // this route for controll doctor
    Route::get('/doctor', 'Cpanel\DoctorController@index');
    // this route for controll pharmacy
    Route::get('/pharmacy', 'Cpanel\PharmacyController@index');
    // this route for controll pharmacy
    Route::get('/diag', 'Cpanel\DiagController@index');
    // this route for controll pharmacy
    Route::get('/clinic', 'Cpanel\ClinicController@index');
    // this route for controll pharmacy
    Route::get('/company-service', 'Cpanel\CompanyServiceController@index');

    // this route for controll news
    Route::get('/news', 'Cpanel\NewsController@index');
    Route::get('/news-add', 'Cpanel\NewsController@create');
    Route::post('/news-add/store', 'Cpanel\NewsController@store');
    Route::get('/news-edit/{news}', 'Cpanel\NewsController@edit');
    Route::get('/news-show/{news}', 'Cpanel\NewsController@show');
    Route::post('/news-edit/{news}/update', 'Cpanel\NewsController@update');

    //this for service company

  
});

