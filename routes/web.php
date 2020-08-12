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

Route::get('/register/driver', 'VehicleController@index')->name('vehicle.index');
Route::post('/register/driver', 'VehicleController@create')->name('vehicle.create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
