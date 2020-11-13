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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('airline', 'AirlineController');

Route::resource('route', 'RouteController');

Route::resource('time', 'TimeController');

Route::resource('class_flight', 'ClassFlightController');

Route::resource('flight', 'FlightController');

Route::resource('seat', 'SeatController');

Route::resource('schedule', 'ScheduleController');

Route::resource('booking', 'BookingController');

Route::resource('booking_seat', 'BookingSeatController');

