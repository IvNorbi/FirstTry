<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use \App\Http\Controllers\GenreController;
Route::resource('genre', GenreController::class);

use \App\Http\Controllers\MovieController;
Route::resource('movie', MovieController::class);
//ezt lebontani 5 routra!





use \App\Http\Controllers\CommentController;
//Route::resource('movies.comments', CommentController::class);
Route::get('movie/{movie}/comment', [CommentController::class, 'index']);

