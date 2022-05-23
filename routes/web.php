<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/admin','AdminController@index')->name('admin');

Route::get('/sell','SellerController@index')->name('sell');

Route::get('/home','HomeController@index')->name('property');
Route::get('/buy','LocationsController@index')->name('buy');
Route::get('/properties/{id}','PropertyController@show')->name('location_properties');


Route::post('/sell','SellerController@store')->name('seller');

Route::get('/add_location','LocationsController@show')->name('addLocation');
Route::post('/add_location','LocationsController@store')->name('saveLocation');


Route::get('/add_property', 'PropertyController@index')->name('addProperty');
Route::post('/add_property','PropertyController@store')->name('saveProperty');

Route::get('/search','SearchController@index')->name('search');
Route::post('/search_result','SearchController@search')->name('result');