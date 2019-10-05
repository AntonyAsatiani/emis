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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'MainController@index');

Auth::routes(['verify' => true]);
//Auth::routes(['verify' => true]);



Route::Get('/home', 'HomeController@index')->name('home');


Route::Get('/search','SearchController@index');

Route::Get('/user', 'User\UserController@index');

// Route::Get('/profile', 'UserController@profile');

Route::prefix('user')->group(function (){
	Route::Get('/profile', 'User\UserController@profile');
	Route::Get('/image', 'User\UserController@image');
	Route::Get('/category', 'User\CategoryController@index');
	Route::Get('/addcategory', 'User\CategoryController@addcategory');
	Route::Get('/editcategory', 'User\CategoryController@editcategory');
	Route::Get('/addresource', 'User\ResourceController@addresource');
	Route::Get('/editresource', 'User\ResourceController@editresource');
});