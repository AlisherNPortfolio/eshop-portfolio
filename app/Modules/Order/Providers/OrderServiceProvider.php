<?php

namespace App\Modules\Order\Providers;

use App\Modules\Order\Contracts\Repository\IOrderRepository;
use App\Modules\Order\Repository\OrderRepository;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class OrderServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Modules\Order\Controllers';

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
            'order'
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

    private function bindModuleClasses()
    {
        $this->app->bind(IOrderRepository::class, OrderRepository::class);
    }
}
