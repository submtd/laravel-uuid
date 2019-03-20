<?php

namespace Submtd\LaravelUuid\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelUuidServiceProvider extends ServiceProvider
{
    /**
     * boot method
     */
    public function boot()
    {
        // config files
        $this->mergeConfigFrom(__DIR__ . '/../../config/laravel-uuid.php', 'laravel-uuid');
        $this->publishes([__DIR__ . '/../../config' => config_path()], 'config');
    }
}
