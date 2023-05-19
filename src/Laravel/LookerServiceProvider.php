<?php

namespace ZiffMedia\Looker\Laravel;

use Illuminate\Support\ServiceProvider;
use ZiffMedia\Looker\Client;

class LookerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(Client::class, function () {
            $client = new Client(

            );
            return $client;
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/looker.php' => config_path('looker.php'),
        ], 'config');
    }
}
