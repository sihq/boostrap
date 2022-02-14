<?php

namespace Sihq\Bootstrap;

use Illuminate\Support\ServiceProvider;

class BootstrapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'bootstrap');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'bootstrap');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('bootstrap.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/bootstrap'),
            ], 'views');*/

            // Publishing assets.
            $this->publishes([
                __DIR__.'/../resources' => base_path(),
                __DIR__.'/../.husky' => base_path(),
                __DIR__.'/../.eslintrc.js' => base_path('.eslintrc.js'),
                __DIR__.'/../lint-staged.config.js' => base_path('lint-staged.config.js'),
                __DIR__.'/../.prettierignore' => base_path('.prettierignore'),
                __DIR__.'/../.prettierrc.js' => base_path('.prettierrc.js'),
                __DIR__.'/../tailwind.config.js' => base_path('tailwind.config.js'),
                __DIR__.'/../tlint.json' => base_path('tlint.json'),
                __DIR__.'/../tsconfig.json' => base_path('tsconfig.json'),
                __DIR__.'/../webpack.mix.js' => base_path('webpack.mix.js'),
                __DIR__.'/../package.json' => base_path('package.json')
            ], 'init');

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/bootstrap'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'bootstrap');

        // Register the main class to use with the facade
        $this->app->singleton('bootstrap', function () {
            return new Bootstrap;
        });
    }
}
