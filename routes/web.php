<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/register', [UserController::class, 'register']);
Route::get('/homepage', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/add-movie-form', [MovieController::class, 'create']);
Route::post('/add-movie-form', [MovieController::class, 'store']);
Route::get('/single-movie/{movie:movie_slug}', [MovieController::class, 'showSingleMovie']);
