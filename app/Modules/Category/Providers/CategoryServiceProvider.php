<?php

namespace App\Modules\Category\Providers;

use App\Modules\Category\Contracts\Repository\ICategoryRepository;
use App\Modules\Category\Repository\CategoryRepository;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Modules\Category\Controllers';

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
            'category'
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
        $this->app->bind(ICategoryRepository::class, CategoryRepository::class);
    }
}
