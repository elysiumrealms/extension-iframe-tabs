<?php

use Illuminate\Support\Facades\Route;
use Dcat\Admin\IframeTabs\Http\Controllers;
use Dcat\Admin\Http\Controllers\AuthController;
use Dcat\Admin\IframeTabs\IframeTabsServiceProvider;

Route::get(
    'iframe-tabs',
    Controllers\IframeTabsController::class . '@index'
)->name('iframes.index');

Route::get(
    '/',
    Controllers\IframeTabsController::class . '@index'
)->name('iframes.index');

Route::namespace(
    config('admin.route.namespace'),
    function (Router $router) {
        $router->get(
            '/dashboard',
            IframeTabsServiceProvider::setting(
                'dashboard',
                'HomeController@index'
            )
        )->name('iframes.dashboard');
    }
);

if (IframeTabsServiceProvider::setting('force_login_in_top', true)) {

    $middleware = config('admin.route.middleware', []);

    array_push($middleware, 'iframe.login');

    $authController = config('admin.auth.controller', AuthController::class);

    Route::get(
        'auth/login',
        $authController . '@getLogin'
    )->middleware($middleware);
}
