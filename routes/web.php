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
    return view('auth/register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('company', 'CompanyController');

Route::get('/create', 'CompanyController@create');
Route::get('/companys', 'CompanyController@index');
Route::get('/companys', function(){return view('company/index');});