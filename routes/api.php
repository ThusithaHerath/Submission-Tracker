<?php

use App\Http\Controllers\API\HomeController;
use App\Http\Controllers\API\StoryController;
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
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/category/stories', [StoryController::class, 'index'])->name('category.stories');
Route::get('/category/submissions', [StoryController::class, 'index'])->name('category.submissions');
Route::get('/category/publishers', [StoryController::class, 'index'])->name('category.publishers');
// Route::post('/logout', [LogoutController::class,'logout'])->name('logout');