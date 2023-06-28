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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/category/stories', [StoryController::class, 'index'])->name('category.stories')->middleware('auth');
Route::get('/category/submissions', [SubmissionController::class, 'index'])->name('category.submissions')->middleware('auth');
Route::get('/category/publishers', [PublisherController::class, 'index'])->name('category.publishers')->middleware('auth');
Route::get('/submissions/total', [SubmissionController::class, 'submissions'])->name('submissions.total')->middleware('auth');
