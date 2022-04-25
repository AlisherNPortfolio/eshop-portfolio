<?php

namespace App\Modules\Product\Providers;

use App\Modules\Product\Contracts\Repository\IProductDetailsRepository;
use App\Modules\Product\Contracts\Repository\IProductListRepository;
use App\Modules\Product\Contracts\Repository\IProductRepository;
use App\Modules\Product\Repository\ProductDetailsRepository;
use App\Modules\Product\Repository\ProductListRepository;
use App\Modules\Product\Repository\ProductRepository;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Modules\Product\Controllers';

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
            'product'
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

    protected function bindModuleClasses()
    {
        $this->app->bind(IProductRepository::class, ProductRepository::class);
        $this->app->bind(IProductListRepository::class, ProductListRepository::class);
        $this->app->bind(IProductDetailsRepository::class, ProductDetailsRepository::class);
    }
}
