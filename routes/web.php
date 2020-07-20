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

Route::view('/cpanel2', 'cpanel2.index');

Route::view('/cpanel', 'cpanel/index');
// Route::view('/bookin', 'cpanel/index');
Route::get('/service', 'CompanyServiceController@index');
Route::get('/service-info/{service}', 'CompanyServiceController@show');


/// this route for Appointment
Route::get('/bookingg', 'AppointmentController@index')->name('booking');
Route::post('/bookingg/search', 'AppointmentController@search');
Route::get('/booking/appointment/{appointment}', 'AppointmentController@show');
Route::post('/booking/appointment/{appointment}', 'AppointmentController@store');


Route::get('/news','NewsController@index' );
Route::get('/news/{news}','NewsController@show' );

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
   



    // this route for controll news
    Route::get('/news', 'Cpanel\NewsController@index');
    Route::get('/news/cancel', 'Cpanel\NewsController@cancel');
    Route::get('/news/add', 'Cpanel\NewsController@create');
    Route::post('/news/store', 'Cpanel\NewsController@store');
    Route::get('/news/{news}/edit', 'Cpanel\NewsController@edit');
    Route::get('/news/{news}', 'Cpanel\NewsController@show');
    Route::put('/news/{news}/update', 'Cpanel\NewsController@update');
    Route::delete('/news/{news}', 'Cpanel\NewsController@destroy');

    //this for service company
    Route::get('/company-service', 'Cpanel\CompanyServiceController@index');
    Route::get('/company-service/cancel', 'Cpanel\CompanyServiceController@cancel');
    Route::get('/compane-service/add', 'Cpanel\CompanyServiceController@create');
    Route::post('/compane-service/store', 'Cpanel\CompanyServiceController@store');
    Route::get('/compane-service/{service}/edit', 'Cpanel\CompanyServiceController@edit');
    Route::put('/compane-service/{service}/update', 'Cpanel\CompanyServiceController@update');
    Route::delete('/compane-service/{service}', 'Cpanel\CompanyServiceController@destroy');

  
});

