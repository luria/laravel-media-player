<?php

namespace Luria\LaravelMediaPlayer;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LaravelMediaPlayerServiceProvider extends ServiceProvider
{
    public function boot()
    {

        $this->loadViewsFrom(__DIR__.'/views', 'luria');

        Blade::component('laravel-media-player', MediaPlayerComponent::class);

        $this->publishes([
            __DIR__.'/public' => public_path('vendor/luria'),
        ], 'public');

    }

    public function register()
    {

    }
}
