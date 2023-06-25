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
});

//publisher 
Route::prefix('publisher')->group(function () {
	Route::post('store', 'App\Http\Controllers\API\PublisherController@store')->name('publisher.store');
	Route::get('delete/{id}', 'App\Http\Controllers\API\PublisherController@destroy')->name('publisher.delete');
});