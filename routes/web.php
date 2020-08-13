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

Route::get('/trailer', function(){
    return view('auth.trailer');
})->name('auth.trailer');

Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
/*
  Route::get('/register', function () {
    })->middleware('driver');*/