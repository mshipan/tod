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
use App\Package;
// Home page route
Route::get('/','PagesController@index');

// TourPackage page route
Route::get('/tourpackages','PagesController@tourpackages');

// Show single TourPackage page route
Route::get('/showpackage','PagesController@showpackages');

// Hotels page route
Route::get('/hotels','PagesController@aboutus');

// Blog page route
Route::get('/blog','PagesController@blogs');

// Contact page route
Route::get('/contact','PagesController@contact');

Route::get('/packages', 'PagesController@packages');

// Admin Page Routes
Route::group(['prefix' => 'admin'], function(){
	Route::get('/','AdminPagesController@index');
	Route::get('/pages/package/create','AdminPagesController@package_create')->name('admin.package.create');
});

