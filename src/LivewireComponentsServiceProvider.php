<?php

namespace Katplex\LivewireComponents;

use Illuminate\Support\ServiceProvider;

class LivewireComponentsServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'livewire-components');
    }
}
