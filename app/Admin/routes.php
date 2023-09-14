<?php

use App\Admin\Controllers\RequestForm;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('users', users::class);
    $router->resource('accesoriesses', Accesories::class);
    $router->resource('requestform', RequestForm::class);

});
