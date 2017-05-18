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


Route::get('/cashier/profile', 'CashierController@profile');
Route::get('/cashier', 'CashierController@home');
Route::get('/cashier/collect_fees', 'CashierController@sportsCollection');


Route::get('/admin', 'AdminHomeController@index');
Route::get('/teacher', 'TeacherHomeController@index');
Route::get('/cashier', 'CashierHomeController@index');
Route::get('/librarian', 'LibrarianHomeController@index');
Auth::routes();

Route::post('registerUser', 'AddingController@registerUser');

Route::get('admin/addUser', 'AdminHomeController@addUser');






