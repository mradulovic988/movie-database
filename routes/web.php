<?php

use App\Http\Controllers\ActorsController;
use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

Route::controller(MoviesController::class)->group(function () {
    Route::get('/', 'index')->name('movies.index');
    Route::get('/movies/{movie}', 'show')->name('movies.show');
});

Route::controller(ActorsController::class)->group(function () {
    Route::get('/actors', 'index')->name('actors.index');
    Route::get('/actors/page/{page?}', 'index');
    Route::get('/actors{actors}', 'show')->name('actors.show');
});
