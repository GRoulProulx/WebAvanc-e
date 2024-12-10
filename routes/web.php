<?php
use App\Routes\Route;

use App\Controllers\HomeController;
use App\Controllers\RenterController;

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

Route::dispatch();

?>