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

// List Projects
Route::get('projects', 'ProjectsController@index');

// List Single Project
Route::get('projects/{id}', 'ProjectsController@show');

// Create new Keyword
Route::post('keyword', 'ProjectKeywordsController@store');
