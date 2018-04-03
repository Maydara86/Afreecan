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

Route::get('/', 'ChildrenController@index')->name('home');

Route::get('/child/create', 'ChildrenController@create');

Route::post('/child', 'ChildrenController@store');

Route::put('/child/{id}', 'ChildrenController@addGodparent');

Auth::routes();

Route::get('/home', 'HomeController@index');
