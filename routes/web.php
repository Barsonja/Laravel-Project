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
    return view('index');
});

Route::get('contact',
	['as' => 'contact', 'uses' => 'ContactController@create']);

//Route::post('contact', 'ContactController@postContact'); /* Direct send mail */

Route::post('contact', 'ContactController@store'); /* Store mail and send via postContact */

Route::get('users/create',
	['uses' => 'UsersController@create']);

Route::post('users',
	['uses' => 'UsersController@store']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
