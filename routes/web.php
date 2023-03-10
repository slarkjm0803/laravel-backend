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
Route::get('/', function () {
    return view('welcome')->with('version', 'smff');
});

Route::get('/test', 'DashboardController@test');
Route::get('/test/ais/getaistrack/{imo}', 'AISController@getAISTrackTest');
Route::get('/setup','HomeController@index');
Route::get('/callback','HomeController@callback');
Route::get('/send','HomeController@send');