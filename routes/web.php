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

Route::redirect('/', '/home');

Route::get('/home', 'HomeController@show');

Route::group(['prefix' => 'news'], function () {

    Route::get('/', ['uses' => 'NewsController@show']);

    Route::get('/{endPoint}', ['uses' => 'NewsController@showByEndPoint']);
});

if (env('APP_ENV') === 'local') {
    Route::group(['prefix' => 'contact'], function () {
        Route::get('/testEmail', 'ContactController@testEmail');
    });
}
