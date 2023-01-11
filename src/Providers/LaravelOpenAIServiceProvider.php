<?php

namespace HarjinderBali\LaravelOpenAi\Providers;

use HarjinderBali\LaravelOpenAi\OpenAi;
use Illuminate\Support\ServiceProvider;

class OpenAiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('OpenAi', function ($app) {
            $OpenAi = new OpenAi($app);
            return $OpenAi;
        });
    }
}
