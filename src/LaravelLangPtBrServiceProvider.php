<?php

namespace LaravelLang;

use Illuminate\Support\ServiceProvider;

class LaravelLangPtBrServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/resources/pt-BR/' => base_path('resources/lang/pt-BR')], 'pt-BR');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}