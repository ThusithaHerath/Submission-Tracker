<?php

use App\Http\Controllers\API\HomeController;
use App\Http\Controllers\API\StoryController;
use App\Http\Controllers\API\PublisherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
	return $request->user();
});


//story 
Route::prefix('story')->group(function () {
	Route::post('store', 'App\Http\Controllers\API\StoryController@store')->name('story.store');
	Route::get('delete/{id}', 'App\Http\Controllers\API\StoryController@destroy')->name('story.delete');
	Route::post('update', 'App\Http\Controllers\API\StoryController@update')->name('story.update');
	Route::get('unlock/{id}', 'App\Http\Controllers\API\StoryController@unlock')->name('story.unlock');
	Route::get('lock/{id}', 'App\Http\Controllers\API\StoryController@lock')->name('story.lock');
});

//publisher 
Route::prefix('publisher')->group(function () {
	Route::post('store', 'App\Http\Controllers\API\PublisherController@store')->name('publisher.store');
	Route::get('delete/{id}', 'App\Http\Controllers\API\PublisherController@destroy')->name('publisher.delete');
	Route::post('update', 'App\Http\Controllers\API\PublisherController@update')->name('publisher.update');
});

//submission 
Route::prefix('submission')->group(function () {
	Route::post('store', 'App\Http\Controllers\API\SubmissionController@store')->name('submission.store');
	Route::get('delete/{id}', 'App\Http\Controllers\API\SubmissionController@destroy')->name('submission.delete');
	Route::post('update', 'App\Http\Controllers\API\SubmissionController@update')->name('submission.update');
});

//settings
Route::prefix('settings')->group(function () {
	Route::post('addField', 'App\Http\Controllers\API\SettingsController@add')->name('settings.addField');
	Route::post('getFieldData', 'App\Http\Controllers\API\SettingsController@getFieldData')->name('settings.getFieldData');
	Route::post('deleteFieldData', 'App\Http\Controllers\API\SettingsController@deleteFieldData')->name('settings.deleteFieldData');
});
