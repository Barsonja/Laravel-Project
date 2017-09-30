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
})->name('index');

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

Route::get('/dbtest', 'InquiryController@index')->name('inquiries');

Route::get('/dbtest/all-inquiries', 'InquiryController@all_inquiries')->name('all_inquiries')->middleware('auth');

Route::get('/dbtest/user-inquiries', 'InquiryController@user_inquiries')->name('user_inquiries')->middleware('auth');

Route::get('/dbtest/grouped-inquiries', 'InquiryController@grouped_inquiries')
				->name('grouped_inquiries')->middleware('auth');

Route::get('/dbtest/users', 'UsersController@all_users')->name('users')->middleware('auth');

Route::get('/profile/{username}', 'UsersController@profile')->middleware('auth');
