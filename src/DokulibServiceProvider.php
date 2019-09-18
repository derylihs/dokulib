<?php

namespace Dyandra\Dokulib;

use Illuminate\Support\ServiceProvider;

class DokulibServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->make('Dyandra\Dokulib\DokulibController');
      $this->loadViewsFrom(__DIR__.'/views', 'doku');
    }
}
