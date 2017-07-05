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
    return view('welcome');
});

Route::get('/tracking/{campaign}.gif', 'TrackingController@capture_event');

Route::get('campaign/create', 'CampaignController@create');
Route::post('campaign/create', 'CampaignController@create');
Route::get('campaign', 'CampaignController@get');

Route::get('tracking/log/{campaign_code}', 'TrackingController@event_log');
Route::get('tracking/stats', 'TrackingController@stats');