<?php

namespace OptimistDigital\Tailwind;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class TailwindServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::style('nova-tailwind', __DIR__ . '/../dist/tailwind.css');
        });
    }
}
