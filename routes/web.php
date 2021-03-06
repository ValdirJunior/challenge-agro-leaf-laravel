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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function() {
    // USERS ROUTES
    Route::get('users', 'UserController@index')->name('users.index');
    Route::get('users/{id}/edit', 'UserController@edit')->name('users.edit');
    Route::post('users/{id}/update', 'UserController@update')->name('users.update');
    Route::get('users/{id}/destroy', 'UserController@destroy')->name('users.destroy');
       
    // LOCATIONS ROUTES
    Route::get('locations', 'LocationController@index')->name('locations.index');
    Route::get('locations/{id}/edit', 'LocationController@edit')->name('locations.edit');
    Route::post('locations/{id}/update', 'LocationController@update')->name('locations.update');
    Route::get('locations/{id}/destroy', 'LocationController@destroy')->name('locations.destroy');
});
   
