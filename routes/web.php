<?php
use App\Routes\Route;

use App\Controllers\HomeController;
use App\Controllers\RenterController;
use App\Controllers\UserController;
use App\Controllers\AuthController;

Route::get('/home', 'HomeController@index');
Route::get('/about', 'HomeController@about');

Route::get('/renters', 'RenterController@index');
Route::get('', 'RenterController@index');
Route::get('/renter/show', 'RenterController@show');
Route::get('/renter/create', 'RenterController@create');
Route::post('/renter/create', 'RenterController@store');
Route::get('/renter/edit', 'RenterController@edit');
Route::post('/renter/edit', 'RenterController@update');
Route::post('/renter/delete', 'RenterController@delete');

Route::get('/user/create', 'UserController@create');
Route::post('/user/create', 'UserController@store');

Route::get('/login', 'AuthController@index');
Route::post('/login', 'AuthController@store');
Route::get('/logout', 'AuthController@delete');

Route::get('/logs', 'LogController@index');
Route::post('/logs', 'LogController@index');

Route::dispatch();

?>