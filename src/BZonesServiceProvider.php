<?php

namespace Bikaraan\BZones;

use Illuminate\Support\ServiceProvider;

class BZonesServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(BZones $extension)
    {
        if (!BZones::boot()) {
            return;
        }

        $this->loadTranslationsFrom(__DIR__.'/../lang', 'bzones');

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'bzones');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {

            $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

            $this->publishes(
                [$assets => public_path('vendor/laravel-admin-ext/bzones')],
                'bzones'
            );
        }

        $this->app->booted(function () {
            BZones::routes(__DIR__ . '/../routes/web.php');
        });
    }
}
