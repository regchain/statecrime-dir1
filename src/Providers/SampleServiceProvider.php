<?php

namespace e_Kejaksaaan\Sample\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class SampleServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations/');
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'sample');

        $this->publishes([
            __DIR__.'/../../resources/views' => base_path('resources/views/vendor/sample'),
        ], 'views');

        $this->publishes([
            __DIR__.'/../../config/sample.php' => config_path('sample.php'),
        ], 'config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/sample.php', 'sample');
    }
}