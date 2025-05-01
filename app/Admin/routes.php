<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('apps', 'PhoneAppController');
    $router->resource('nodes', 'NodeController');
    $router->get('/chatroom', 'MessageController@index');
    $router->post('/uploadfile', 'MessageController@uploadFile');
    $router->resource("habbit_types","HabbitController");
    $router->resource("habbit_records","HabbitRecordController");
});
