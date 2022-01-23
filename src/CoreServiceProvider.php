<?php

namespace PanelSsh\Core;

use Illuminate\Support\ServiceProvider;
use PanelSsh\Core\Libraries\Nanoid;
use PanelSsh\Core\Libraries\Socket;
use PanelSsh\Core\Libraries\Tunnel;

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
        $this->app->bind('nanoid', function () {
            return $this->app->make(Nanoid::class);
        });

        $this->app->bind('tunnel', function ($app) {
            return new Tunnel($app);
        });

        $this->app->bind('socket', function () {
            return new Socket();
        });
    }
}
