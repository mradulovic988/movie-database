<?php

use App\Http\Controllers\ActorsController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\TvController;
use Illuminate\Support\Facades\Route;

Route::controller(MoviesController::class)->group(function () {
    Route::get('/', 'index')->name('movies.index');
    Route::get('/movies/{id}', 'show')->name('movies.show');
});

Route::controller(ActorsController::class)->group(function () {
    Route::get('/actors', 'index')->name('actors.index');
    Route::get('/actors/page/{page?}', 'index');
    Route::get('/actors/{id}', 'show')->name('actors.show');
});

Route::controller(TvController::class)->group(function () {
    Route::get('/tv', 'index')->name('tv.index');
    Route::get('/tv/{id}', 'show')->name('tv.show');
});