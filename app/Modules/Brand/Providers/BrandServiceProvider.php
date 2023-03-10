<?php

namespace App\Modules\Brand\Providers;

use App\Modules\Brand\Contracts\Repository\IBrandRepository;
use App\Modules\Brand\Repository\BrandRepository;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class BrandServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Modules\Brand\Controllers';

    protected $apiPrefix = '/api/v1';

    protected $defer = false;

    public function boot()
    {
        $this->registerConfig();

        $this->routes();

        if ($this->app->runningInConsole()) {
            $this->registerMigrations();
        }

        $this->bindModuleClasses();
    }

    protected function registerConfig()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/config.php',
            'brand'
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

    public function bindModuleClasses()
    {
        $this->app->bind(IBrandRepository::class, BrandRepository::class);
    }
}
