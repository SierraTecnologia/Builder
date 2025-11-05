<?php

namespace SierraTecnologia\Builder;

use SierraTecnologia\Builder\Console\Activity;
use SierraTecnologia\Builder\Console\Api;
use SierraTecnologia\Builder\Console\Billing;
use SierraTecnologia\Builder\Console\Bootstrap;
use SierraTecnologia\Builder\Console\Features;
use SierraTecnologia\Builder\Console\Forge;
use SierraTecnologia\Builder\Console\Logs;
use SierraTecnologia\Builder\Console\Notifications;
use SierraTecnologia\Builder\Console\Queue;
use SierraTecnologia\Builder\Console\Socialite;
use SierraTecnologia\Builder\Console\Starter;
use SierraTecnologia\CrudMaker\CrudMakerProvider;
use SierraTecnologia\Crypto\CryptoProvider;
use SierraTecnologia\FormMaker\FormMakerProvider;
use Illuminate\Support\ServiceProvider;

class SierraTecnologiaBuilderProvider extends ServiceProvider
{
    /**
     * Boot method.
     */
    public function boot()
    {
        // do nothing
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        /*
        |--------------------------------------------------------------------------
        | Providers
        |--------------------------------------------------------------------------
        */

        $this->app->register(FormMakerProvider::class);
        $this->app->register(CryptoProvider::class);
        $this->app->register(CrudMakerProvider::class);

        /*
        |--------------------------------------------------------------------------
        | Register the Commands
        |--------------------------------------------------------------------------
        */

        $this->commands([
            Activity::class,
            Api::class,
            Billing::class,
            Bootstrap::class,
            Features::class,
            Forge::class,
            Logs::class,
            Queue::class,
            Notifications::class,
            Socialite::class,
            Starter::class,
        ]);
    }
}
