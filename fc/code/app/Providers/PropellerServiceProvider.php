<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PropellerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if (! $this->runningInFc()) {
            return;
        }

        $this->configureStoragePath();
    }

    protected function runningInFc()
    {
        return (bool) getenv('FC_FUNC_CODE_PATH');
    }

    protected function configureStoragePath()
    {
        $this->app->useStoragePath('/tmp/storage');
    }
}
