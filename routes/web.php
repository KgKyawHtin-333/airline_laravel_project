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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('airline', 'AirlineController');

Route::resource('route', 'RouteController');

Route::resource('time', 'TimeController');

Route::resource('class_flight', 'ClassFlightController');

Route::resource('flight', 'FlightController');

Route::resource('seat', 'SeatController');

Route::resource('schedule', 'ScheduleController');

Route::resource('booking', 'BookingController');

Route::resource('booking_seat', 'BookingSeatController');

Route::resource('city', 'CityController');

Route::resource('user', 'UserController');

//Frontend template
Route::get('/', 'FrontendController@home')->name('mainpage');

Route::get('login_page', 'FrontendController@login')->name('login_page');

Route::get('signup_page', 'FrontendController@signup')->name('signup_page');

Route::get('register_page', 'FrontendController@register_page')->name('register_page');

// for only one way
Route::post('flightSearch','FrontendController@flightSearch')->name('flightSearch');
//for roundtrip seach
Route::post('flightSearchRound','FrontendController@flightSearchRound')->name('flightSearchRound');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// for frontend booking preview
Route::get('/prevbook', 'BookingController@previewBooking')->name('prevbook');
//for user to show schedule booking with ajax
Route::get('/getScheduleUser/{id}','BookingController@getScheduleUser')->name('getScheduleUser');

