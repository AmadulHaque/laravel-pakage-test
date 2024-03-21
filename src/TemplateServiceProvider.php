<?php

namespace Akash\LaravelPkgTem;

use Illuminate\Support\ServiceProvider;

class TemplateServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('laravel-package-template', function($app) {
            return new \AmadulHaque\LaravelPkgTem\Template();
        });

        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel-package-template.php', 'laravel-package-template'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/laravel-package-template.php' => config_path('laravel-package-templatee-slug.php'),
        ]);
    }
}
