<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/show/rank', 'HackathonResultController@show_rank')->name('show_rank');
Route::get('/show/result/{id}', 'HackathonResultController@show_result')->name('show_result');
Route::post('/show/result/{id}', 'HackathonResultController@show_done')->name('show_done');

Route::get('/', 'HackathonResultController@index')->name('index');

Route::get('/score/create/{id}', 'HackathonResultController@score_create')->name('score_create');
Route::post('/score/create/{id}', 'HackathonResultController@score_store')->name('score_store');
Route::post('/score/destroy/{id}', 'HackathonResultController@score_destroy')->name('score_destroy');
