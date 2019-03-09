<?php

namespace Saant\Voyx\Providers;

use Illuminate\Support\ServiceProvider;

Class VoyxServiceProvider extends ServiceProvider
{

    public function boot()
    {
        info("voyx bootstraped");
    }

    public function register()
    {
    }
}