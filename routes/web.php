<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/contact','ContactController@index');

// admin route
// Route::group(['prefix' => 'admincp/admin'], function() {
//     Route::get('logout','Auth\LoginController@logout');
//     Route::post('login', 'Auth\LoginController@login');
//     Route::get('login', 'Auth\LoginController@showLoginForm');
// });
//Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth','admin']], function() {
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::resource('/article', 'ArticleController');
    Route::get('/polling/data','PollingController@data');
    Route::resource('/polling', 'PollingController');
    Route::get('/', 'DashboardController@index');
});