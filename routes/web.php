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


Route::get('/admin', 'AdminHomeController@index');
Route::get('/teacher', 'TeacherHomeController@index');
Route::get('/cashier', 'CashierHomeController@index');
Route::get('/librarian', 'LibrarianHomeController@index');
Auth::routes();

Route::post('registerUser', 'AddingController@registerUser');

Route::get('admin/addUser', 'AdminHomeController@addUser');






