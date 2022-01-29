<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('reservations','ReservationController');
Route::get('calendars/{user}/get_reservation_days','CalendarController@getCalendarDaysByUser');
Route::resource('calendars','CalendarController');
Route::resource('disabled_days','DisabledDaysController');
Route::get('routes/{route}/check_capacity','RouteController@checkCapacity');
Route::resource('routes','RouteController');
