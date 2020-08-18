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


Route::get('/profile/client', function(){
    $users = [
        0 => [
                "name" => "Nomathemba",
                "date" => "10 August 2020, 15:41"
            ],
        1 => [
                "name" => "Zodwa",
                "date" => "13 December 2020, 20:14"
            ],
        2 => [
                "name" => "Bonginkosi",
                "date" => "30 July 2020, 10:30"
            ]
    ];

    return view('client_profile', ['users' => $users]);
});

Route::get('/profile/driver', function(){
    $users = [
        0 => [
                "name" => "Nomathemba",
                "date" => "10 August 2020, 15:41"
            ],
        1 => [
                "name" => "Zodwa",
                "date" => "13 December 2020, 20:14"
            ],
        2 => [
                "name" => "Bonginkosi",
                "date" => "30 July 2020, 10:30"
            ]
    ];

    return view('driver_profile', ['users' => $users]);
});


Auth::routes(['verify' => true]);



Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
/*
  Route::get('/register', function () {
    })->middleware('driver');*/