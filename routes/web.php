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
	['as' => 'contact', 'uses' => 'InquiryController@create']);

//Route::post('contact', 'InquiryController@postInquiry'); /* Direct send mail */

Route::post('contact', 'InquiryController@store'); /* Store mail and send via postInquiry */

Route::get('users/create',
	['uses' => 'UsersController@create']);

Route::post('users',
	['uses' => 'UsersController@store']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dbtest', 'InquiryController@test');
