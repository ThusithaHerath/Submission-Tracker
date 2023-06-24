<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\StoryController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category/stories', [StoryController::class, 'index'])->name('category.stories');
Route::get('/category/submissions', [StoryController::class, 'index'])->name('category.submissions');
Route::get('/category/publishers', [StoryController::class, 'index'])->name('category.publishers');