<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//insert routes

Route::get('/addseries','\App\Http\Controllers\SeriesController@add');
Route::get('/updateseries/{id}','\App\Http\Controllers\SeriesController@update');
// Route::get('/updateseries',function () {
//     return view('useries');
// });

Route::post('/addseries','\App\Http\Controllers\SeriesController@store');
Route::post('/updateseries/{id}','\App\Http\Controllers\SeriesController@updates');


Route::get('/addseason/{name}','\App\Http\Controllers\SeasonController@add');
Route::post('/addseason/{name}','\App\Http\Controllers\SeasonController@store');

Route::get('/addepisode/{sname}/{sename}','\App\Http\Controllers\EpisodeController@add');
Route::post('/addepisode/{sname}/{sename}','\App\Http\Controllers\EpisodeController@store');

//view routes

Route::get('/viewseries','\App\Http\Controllers\SeriesController@view')->name('view.series');
Route::get('/viewseason/{name}','\App\Http\Controllers\SeasonController@view')->name('view.seasons');
Route::get('/viewepisode/{sname}/season-{sename}','\App\Http\Controllers\EpisodeController@view')->name('view.episode');

//delete routes

//series delete

Route::get('/delete/{sid}','\App\Http\Controllers\SeriesController@delete');

//season delete
Route::get('season/delete/{seid}','\App\Http\Controllers\SeasonController@delete');

//episode delete
Route::get('episode/delete/{epid}','\App\Http\Controllers\EpisodeController@delete');

//view frontend routes

Route::get('/series/{name}','\App\Http\Controllers\SeasonController@see')->name('view.seasons.name');

