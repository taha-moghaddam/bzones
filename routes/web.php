<?php

use Illuminate\Routing\Router;
use Bikaraan\BZones\Http\Controllers\ZonesController;
use Bikaraan\BZones\Http\Controllers\SearchController;

Route::group([
    'prefix' => config('admin.extensions.bzones.config.prefix', 'bzones'),
    'as' => 'bzones.',
], function (Router $router) {

    $router->resource('zones', ZonesController::class);

    $router->get('search', SearchController::class)->name('search');
});
