<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('vo.add_meetingplace');
});


Route::get('/vo/meetingplace', 'VoController@meetingplace');
Route::get('/vo/add_meetingplace', 'VoController@getAddMeetingplace');
Route::post('/vo/add_meetingplace', 'VoController@postAddMeetingplace');