<?php

namespace App\Modules\Pattern\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class PatternServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Modules\Pattern\Controllers';

    protected $apiPrefix = '/api/v1';

    protected $defer = false;

    public function boot()
    {
        $this->registerConfig();

        $this->routes();

        if ($this->app->runningInConsole()) {
            $this->registerMigrations();
        }

        // $this->app->bind(AnyInterface::class, AnyPatternRepository::class);
    }

    protected function registerConfig()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/config.php',
            'pattern'
        );
    }

    protected function registerMigrations()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    public function routes()
    {
        Route::prefix($this->apiPrefix)
            ->namespace($this->namespace)
            ->group(__DIR__ . '/../routes/route.php');
    }
}
