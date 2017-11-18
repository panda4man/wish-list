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

//Authentication routes
Auth::routes();

//Social login routes
Route::group(['prefix' => 'login'], function () {
    Route::get('/{provider}', 'Auth\LoginController@redirectToProvider')->name('socialLogin');
    Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
});

//Application landing page
Route::view('/', 'welcome');

//Auth protected routes
Route::group(['middleware' => 'auth'], function () {
    //Must be finished registering to view these
    Route::group(['middleware' => 'finished-registering'], function () {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('wish-lists', 'WishListsController@index');
        Route::get('wish-lists/{wish_list}', 'WishListsController@show');
    });

    Route::get('/profile/password', 'UsersController@getPassword');
    Route::post('/profile/password', 'UsersController@postUpdatePassword');
});
