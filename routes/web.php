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

Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@verify');
Route::get('/logout', 'logoutController@index');



Route::get('/admin', 'adminController@index')->name('admin.index');
Route::get('/admin/create', 'adminController@create');    
Route::post('/admin/create', 'adminController@employeestore');
Route::get('/admin/employeelist', 'adminController@emplist')->name('admin.emplist');
Route::get('/edit/{id}', 'adminController@edit');
Route::post('/edit/{id}', 'adminController@update');
Route::get('/delete/{id}', 'adminController@delete');



Route::get('/emp', 'empController@index')->name('emp.index');
Route::get('/emp/create', 'empController@create')->name('emp.create');    
Route::post('/emp/create', 'empController@productstore');
Route::get('/emp/edit/{id}', 'empController@edit');
Route::post('/emp/edit/{id}', 'empController@update');
Route::get('/emp/plist', 'empController@plist')->name('emp.plist');

