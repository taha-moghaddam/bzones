<?php

use Illuminate\Routing\Router;
use Bikaraan\BZones\Http\Controllers\ZonesController;

Route::group([
    'prefix' => config('admin.extensions.bzones.config.prefix', 'bzones'),
    'as' => 'bzones.',
], function (Router $router) {

    $router->get('/', BZonesController::class . '@index');

    $router->resource('zones', ZonesController::class);
});
