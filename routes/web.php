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

Route::get('admin', 'AdminHomeController@index');

Route::get('teacher', 'TeacherHomeController@index');

Route::get('/librarian', 'LibrarianHomepageController@index');

Route::post('/search', 'HomeController@search');

// cashier

Route::get('cashier/class', 'AdminHomeController@schoolClasses');

Route::get('cashier/grade', 'AdminHomeController@schoolGrades');

Route::get('/cashier', 'CashierController@home');

Route::get('/cashier/profile/{username}', 'CashierController@profile');

Route::get('cashier/edit_category', 'CashierController@editCategory');

Route::get('cashier/delete_category', 'CashierController@deleteCategory');

Route::get('/cashier/add_new_category', 'CashierController@newCategory');

Route::get('/cashier/collect_payment', 'CashierController@collectPayment');

Route::get('/cashier/collect_payment2/{lrn}', 'CashierController@collectPayment2');

Route::get('/cashier/collect_fees', 'CashierController@collectFees');

Route::get('/cashier/fee_categories', 'CashierController@feeCategories');

Route::get('/cashier/overdues', 'CashierController@overdues');

Route::get('/cashier/collection_history', 'CashierController@collectionHistory');

Route::get('/cashier/collect_now', 'CashierController@recordCollection');



Auth::routes();


Route::post('allAccount', 'AdminHomeController@getAllAccount');

Route::post('registerUser', 'AddingController@registerUser');

Route::post('addStudent', 'AddingController@addStudent');

Route::post('addGrade', 'AddingController@addGrade');

Route::post('addClass', 'AddingController@addClass');

Route::post('searchStudent', 'TeacherHomeController@searchStudent');

Route::post('assignStudent', 'TeacherHomeController@assignStudent');

Route::post('admin/addSubject', 'AddingController@addSubject');

//admin
Route::get('admin/addSubject', 'AdminHomeController@addSubject');

Route::get('admin/class', 'AdminHomeController@schoolClasses');

Route::get('admin/grade', 'AdminHomeController@schoolGrades');

Route::get('admin/addUser', 'AdminHomeController@addUser');

Route::get('admin/account', 'AdminHomeController@account');

Route::get('admin/profile/{username}', 'AdminHomeController@profile');

Route::get('admin/addStudent', 'AdminHomeController@addStudent');

Route::get('admin/addClass', 'AdminHomeController@addClass');

Route::get('admin/addGrade', 'AdminHomeController@addGrade');

Route::get('admin/class/{name}', 'TeacherHomeController@getClass');

Route::get('admin/assign/{name}', 'TeacherHomeController@assignToSection');

Route::get('admin/profile/{username}/edit', 'AdminHomeController@editProfile');

//for teacher only

Route::get('teacher/class', 'AdminHomeController@schoolClasses');

Route::get('teacher/grade', 'AdminHomeController@schoolGrades');

Route::get('teacher/schedule', 'TeacherHomeController@schedule');

Route::get('teacher/classRecord/{sectionName}', 'TeacherHomeController@classRecord');

Route::get('teacher/profile/{username}', 'TeacherHomeController@profile');

Route::get('student', 'TeacherHomeController@student');

Route::get('/profile/classRecord/{sectionName}/{LRN}','TeacherHomeController@edit');
Route::get('/save/grades', 'TeacherHomeController@update');

Route::get('temporary', function(){
	return view('profile(teacher)');
}); 	

//librarian

Route::get('/accountability/view_accountability', 'AccountabilityController@index');

Route::get('/librarian/create', 'LibrarianHomepageController@create');

Route::post('/librarian/addBookAccountability', 'LibrarianHomepageController@addBookAccountability');

Route::get('/accountability/add_accountability/{id}', 'AddingController@viewAddAccountability');

Route::post('/accountability/userAccountability', 'AddingController@addAccountability');

Route::get('accountability/addAccountability', 'AddingController@addAccountability');

Route::get('/accountability/edit_accountability/{id}', 'AccountabilityController@edit');

Route::post('/accountability/update_accountability/{id}', 'AccountabilityController@update');

Route::get('/librarian/edit_borrowbook/{LRN}', 'LibrarianHomepageController@edit');