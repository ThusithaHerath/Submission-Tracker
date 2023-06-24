<?php

use App\Http\Controllers\API\PublisherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\StoryController;
use App\Http\Controllers\API\SubmissionController; 
 

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category/stories', [StoryController::class, 'index'])->name('category.stories');
Route::get('/category/submissions', [SubmissionController::class, 'index'])->name('category.submissions');
Route::get('/category/publishers', [PublisherController::class, 'index'])->name('category.publishers');


