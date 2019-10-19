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

Route::get('/home', 'HomeController@index')->name('home');
//CRUD
Route::get('/contacts','ContactController@index');
Route::get('/contacts/create','ContactController@create');
Route::post('/contacts/store','ContactController@store')->name('contacts.store');
