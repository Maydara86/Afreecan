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

Route::put('/child/revoke-godparent/{id}', 'ChildrenController@revokeGodparent');

Route::get('/child/edit/{id}', 'ChildrenController@edit');

Route::put('/child/edit/{id}', 'ChildrenController@update');

Auth::routes();

Route::get('/home', 'HomeController@index');
