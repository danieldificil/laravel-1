<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

// forma 1 de agrupar actions

//Route::get('/series', [\App\Http\Controllers\SeriesController::class, 'index']);
//
//Route::get('/series/create', [\App\Http\Controllers\SeriesController::class, 'create']);
//
//Route::post('/series/save', [\App\Http\Controllers\SeriesController::class, 'store']);
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// forma 2 de agrupar actions

//Route::controller(\App\Http\Controllers\SeriesController::class)->group( function () {
//    Route::get('/series', 'index')->name('series.index');
//
//    Route::get('/series/create', 'create')->name('series.create');
//
//    Route::post('/series/save', 'store')->name('series.store');
//
//});

// forma 3 de agrupar actions (paths ficam por padrão em REST)
//
//Route::resource('/series', \App\Http\Controllers\SeriesController::class);

Route::resource('/series', \App\Http\Controllers\SeriesController::class)
->only(['index', 'create', 'store', 'destroy', 'edit']);
