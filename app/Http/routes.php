<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'TaskController@index'] );

    Route::group(['prefix' => 'tasks'], function () {
        Route::get('/', ['as' => 'tasks.index', 'uses' => 'TaskController@index'] );
        Route::get('create', ['as' => 'task.create', 'uses' => 'TaskController@create']);
        Route::post('store', ['as' => 'task.store', 'uses' => 'TaskController@store']);
        Route::get('{id}/edit', ['as' => 'task.edit', 'uses' => 'TaskController@edit']);
        Route::post('{id}/update', ['as' => 'task.update', 'uses' => 'TaskController@update']);
    });
});

