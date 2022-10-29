<?php

use Movies\Api\Auth\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Movies\Api\Comments\Controllers\CommentController;
use Movies\Api\Movies\Controllers\MoviesController;
use Movies\Api\Product\Controllers\ProductController;

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

Route::prefix('1')->group(function () {

    //login user
    Route::post('login', [AuthController::class, 'login']);

    //Comments
    Route::get('comments', [CommentController::class, 'getAllComments']);
    Route::get('comments/{id}', [CommentController::class, 'showCommentById']);
    Route::post('comments', [CommentController::class, 'createComment']);
    Route::put('comments/{id}', [CommentController::class, 'updateCommentById']);
    Route::delete('comments/{id}', [CommentController::class, 'deleteCommentById']);

    //unauthorized user
    Route::get('movies', [MoviesController::class, 'getAllMovies']);
    Route::get('movies/{id}', [MoviesController::class, 'showMovieById']);


    Route::middleware('auth:api')->group(function () {
        //Movies
        Route::post('movies', [MoviesController::class, 'createMovie']);
        Route::put('movies/{id}', [MoviesController::class, 'updateMovieById']);
        Route::delete('movies/{id}', [MoviesController::class, 'deleteMovieById']);
        Route::post('movies/{id}/upload', [MoviesController::class, 'uploadMovieImage']);
    });
});
