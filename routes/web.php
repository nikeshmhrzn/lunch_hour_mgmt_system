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

Route::get('/', function () {
    return view('welcome');

});

Auth::routes();
Route::get('approval', 'HomeController@approval')->name('approval');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/changePassword','HomeController@showChangePasswordForm');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');



Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('admin/staffs', 'Admin\StaffController@index')->name('admin.staff')->middleware(['auth','admin']);
Route::get('admin/staffs/create', 'Admin\StaffController@create')->middleware(['auth','admin']);
Route::post('admin/staffs', 'Admin\StaffController@store')->middleware(['auth','admin']);
Route::get('admin/staffs/{edit}/edit','Admin\StaffController@edit');
Route::patch('admin/staffs/{edit}','Admin\StaffController@update');
Route::delete('admin/staffs/{delete}', 'Admin\StaffController@destroy');

Route::get('admin/employees', 'Admin\EmployeeController@index')->middleware(['auth','admin']);
Route::get('admin/employees/{employee}/approve', 'Admin\EmployeeController@approve')->middleware(['auth','admin']);

Route::get('order/food', 'OrderController@index')->middleware('auth');
Route::post('order/food', 'OrderController@store');
// Route::get('order/food/{employee}/approve', 'OrderController@approve');

// Route::get('order/create', 'OrderController@message');

Route::get('staffs/category', 'CategoryController@index')->name('category')->middleware('auth');
Route::get('staffs/category/create', 'CategoryController@create')->middleware('auth');
Route::post('staffs/category', 'CategoryController@store')->middleware('auth');
Route::get('staffs/category/{edit}/edit','CategoryController@edit')->middleware('auth');
Route::patch('staffs/category/{edit}', 'CategoryController@update')->middleware('auth');
Route::delete('staffs/category/{delete}', 'CategoryController@destroy')->middleware('auth');
Route::get('staffs/category/{category}', 'CategoryController@show')->middleware('auth');


Route::get('staffs/food', 'FoodController@index')->middleware('auth');
Route::get('staffs/food/create','FoodController@create')->middleware('auth');
Route::post('staffs/food','FoodController@store')->middleware('auth');
Route::get('staffs/food/{edit}/edit','FoodController@edit')->middleware('auth');
Route::patch('staffs/food/{edit}','FoodController@update')->middleware('auth');
Route::delete('staffs/food/{delete}', 'FoodController@destroy')->middleware('auth');

Route::get('employee', 'EmployeController@index')->middleware('auth');

Route::get('order/view', 'OrderviewController@index')->middleware('auth');
// Route::get('employee/create', 'EmployeController@create');
// Route::post('employee', 'EmployeController@store');



