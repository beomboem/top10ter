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

/*Route::get('/', function () {
    return view('public.index');
});*/
Route::get('/','PageController@index');
Route::get('/showArticle/{id}','PageController@showArticles');
Route::post('/showArticle/{id}','PageController@submitComment');
Route::delete('/showArticle/{id}','PageController@deleteComment');
Route::get('/giveRating/{article_id}/{rating}','PageController@giveRating');
Route::get('/editProfile/','PageController@editProfile');
Auth::routes();

//Route::get('/home', 'HomeController@index');
Route::get('/profile', 'PageController@profile');
Route::get('/articles', 'PageController@articles');
Route::get('/addArticle', 'PageController@addArticle');
Route::post('/addArticle','PageController@submitNewArticle');
Route::get('/addPolling', 'PageController@addPolling');
Route::post('/addPolling', 'PageController@submitNewPolling');

//Route::get('/contact','PageController@contact');
Route::post('/contact','PageController@sendMessage');
Route::post('/submitPoll','PageController@submitPoll');

// admin route
Route::group(['prefix' => 'admin'], function() {
    Route::get('logout','Auth\LoginController@logout');
    //Route::post('login', 'Auth\LoginController@login');
    //Route::get('login', 'Auth\LoginController@showLoginForm');
});
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth','admin']], function() {
    Route::resource('/article', 'ArticleController');
    Route::get('/approveArticle/{id}', 'ArticleController@approve');
    Route::get('/rejectArticle/{id}', 'ArticleController@reject');
    Route::get('/polling/data','PollingController@data');
    Route::resource('/polling', 'PollingController');
    Route::get('/approvePolling/{id}', 'PollingController@approve');
    Route::get('/rejectPolling/{id}', 'PollingController@reject');
    Route::get('/', 'DashboardController@index');
    Route::get('/message/data','MessageController@data');
    Route::resource('/message','MessageController');
});