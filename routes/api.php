<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request
//$request)
//{
 //   return $request->user();
//});


Route::group(['prefix' => 'contact'], function()
{
    Route::post('/', 'ContactController@sendEmail');
});

if (env('APP_ENV') === 'local') {

    Route::group(['prefix' => 'users'], function () {

        Route::get('/', 'UserController@findAll');

        Route::get('/{id}', 'UserController@find');
    });

    Route::group(['prefix' => 'roles'], function () {

        Route::get('/', 'RoleController@findAll');

        Route::get('/{id}', 'RoleController@find');
    });

    Route::group(['prefix' => 'institutions'], function () {

        Route::get('/', 'InstitutionController@findAll');

        Route::get('/{id}', 'InstitutionController@find');
    });


    Route::group(['prefix' => 'news'], function () {

        Route::get('/', 'NewsController@findAll');

        Route::get('/last/{count}', 'NewsController@findLast');

        Route::get('/{id}', 'NewsController@find');
    });


    Route::group(['prefix' => 'portals'], function () {

        Route::get('/', 'PortalController@findAll');

        Route::get('/{id}', 'PortalController@find');

        Route::get('/{name}', 'PortalController@findByName');
    });
}
