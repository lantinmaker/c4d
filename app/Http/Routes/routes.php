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

Route::group( ['middleware' => ['web']], function () {
    Route::get('/','HomeController@index')->name('home.index');
    Route::get('/model/{id}','ModelController@detail')->name('model.detail');
    Route::get('/models','ModelController@index')->name('model.index');

    Route::get('/bbs','BBSController@index')->name('bbs.index');
});

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
    Route::group(['prefix' => 'user', 'namespace' => 'User'], function () {
        require app_path('Http/Routes/user.php');
    });

    Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
        require app_path('Http/Routes/admin.php');
    });

    Route::group(['prefix' => 'api' , 'namespace' => 'Api'] , function (){
        require app_path('Http/Routes/api.php');
    });
});
