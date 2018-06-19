<?php

Route::group(['middleware' => ['auth:admin']], function ($router) {
    $router->get('/', ['uses' => 'AdminController@index','as' => 'admin.index']);

    $router->resource('index', 'IndexController');

    //目录
    $router->resource('menus', 'MenuController');

    //后台用户
    $router->get('adminuser/ajaxIndex',['uses'=>'AdminUserController@ajaxIndex','as'=>'admin.adminuser.ajaxIndex']);
    $router->resource('adminuser', 'AdminUserController');

    //权限管理
    $router->get('permission/ajaxIndex',['uses'=>'PermissionController@ajaxIndex','as'=>'admin.permission.ajaxIndex']);
    $router->resource('permission', 'PermissionController');

    //角色管理
    $router->get('role/ajaxIndex',['uses'=>'RoleController@ajaxIndex','as'=>'admin.role.ajaxIndex']);
    $router->resource('role', 'RoleController');

    $router->get('models/{id?}/files' , 'Documents\ModelController@files');
    $router->get('models/{id?}/images' , 'Documents\ModelController@images');
    $router->post('models/{id?}/images/ajaxsort' , ['uses' => 'Documents\ModelController@imageSort' , 'as' => 'admin.models.images.ajaxsort'] );
    $router->resource('models' , 'Documents\ModelController');


    $router->get('projects/{id?}/files' , 'Documents\ProjectController@files');
    $router->get('projects/{id?}/images' , 'Documents\ProjectController@images');
    $router->resource('projects' , 'Documents\ProjectController');

    $router->get('materials/{id?}/files' , 'Documents\MaterialController@files');
    $router->get('materials/{id?}/images' , 'Documents\MaterialController@images');
    $router->resource('materials' , 'Documents\MaterialController');


    $router->get('decals/{id?}/files' , 'Documents\DecalController@files');
    $router->get('decals/{id?}/images' , 'Documents\DecalController@images');
    $router->resource('decals' , 'Documents\DecalController');


    $router->get('defaults/{id?}/files' , 'Documents\DefaultController@files');
    $router->get('defaults/{id?}/images' , 'Documents\DefaultController@images');
    $router->resource('defaults' , 'Documents\DefaultController');

    $router->get('plugins/{id?}/files' , 'Documents\PluginController@files');
    $router->get('plugins/{id?}/images' , 'Documents\PluginController@images');
    $router->resource('plugins' , 'Documents\PluginController');

    $router->get('users/data' , ['uses' => 'UserController@data' , 'as' => 'users.data' ]);
    $router->get('users/vip' , ['uses' => 'UserController@vip' , 'as' => 'users.vip' ]);
    $router->get('users/black' , ['uses' => 'UserController@black' , 'as' => 'users.black' ]);
    $router->resource('users','UserController');

});

Route::get('login', ['uses' => 'AuthController@index','as' => 'admin.auth.index']);
Route::post('login', ['uses' => 'AuthController@login','as' => 'admin.auth.login']);

Route::get('logout', ['uses' => 'AuthController@logout','as' => 'admin.auth.logout']);

Route::get('register', ['uses' => 'AuthController@getRegister','as' => 'admin.auth.register']);
Route::post('register', ['uses' => 'AuthController@postRegister','as' => 'admin.auth.register']);

Route::get('password/reset/{token?}', ['uses' => 'PasswordController@showResetForm','as' => 'admin.password.reset']);
Route::post('password/reset', ['uses' => 'PasswordController@reset','as' => 'admin.password.reset']);
Route::post('password/email', ['uses' => 'PasswordController@sendResetLinkEmail','as' => 'admin.password.email']);
