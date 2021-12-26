<?php

namespace PanelSsh\Core;

use Illuminate\Support\ServiceProvider;
use PanelSsh\Core\Libraries\Nanoid;

class CoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('nanoid', function () {
            return $this->app->make(Nanoid::class);
        });
    }
}
