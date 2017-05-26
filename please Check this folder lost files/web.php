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

Route::get('/', 'HomeController@index');
Route::get('/profile(teacher)', 'ProfileTeacherController@index');
Route::get('/schedule', 'ScheduleController@index');
Route::get('/homepage(teacher)', 'HomepageTeacherController@index');
Route::get('/classrecord','ClassrecordController@index');
Auth::routes();


Auth::routes();

