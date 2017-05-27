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




Route::get('cashier/collect_fees', 'CashierController@sportsCollection');

Route::get('cashier/profile', 'CashierController@profile');

Route::get('cashier', 'CashierController@home');

Route::get('admin', 'AdminHomeController@index');


Route::get('teacher', 'TeacherHomeController@index');

Route::get('cashier', 'CashierHomeController@index');

Route::get('/librarian', 'LibrarianHomepageController@index');


Auth::routes();

//post
Route::post('allAccount', 'AdminHomeController@getAllAccount');

Route::post('registerUser', 'AddingController@registerUser');

Route::post('addStudent', 'AddingController@addStudent');

Route::post('addGrade', 'AddingController@addGrade');

Route::post('addClass', 'AddingController@addClass');


// admin
Route::get('admin/class', 'AdminHomeController@schoolClass');

Route::get('admin/grade', 'AdminHomeController@schoolGrade');

Route::get('admin/addUser', 'AdminHomeController@addUser');

Route::get('admin/account', 'AdminHomeController@account');

Route::get('admin/profile/{username}', 'AdminHomeController@profile');

Route::get('admin/addStudent', 'AdminHomeController@addStudent');

Route::get('admin/addClass', 'AdminHomeController@addClass');

Route::get('admin/addGrade', 'AdminHomeController@addGrade');


Route::get('temporary', function(){
	return view('profile(teacher)');
});


Route::get('/librarian/create', 'LibrarianHomepageController@create');

Route::post('/librarian/addBookAccountability', 'LibrarianHomepageController@addBookAccountability');

Route::get('/class_profile', 'ClassProfileController@index');

Route::post('/accountability/librarianAddAccountability', 'AddingController@addAccountability');

Route::get('/add_accountability', 'AddingController@viewAddAccountability');