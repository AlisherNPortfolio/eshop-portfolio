<?php

namespace App\Modules\Pattern\Providers;

use App\Modules\_Pattern\Contracts\Repository\IPatternRepository;
use App\Modules\Pattern\Repository\PatternRepository;
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

        $this->bindModuleClasses();
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

    private function bindModuleClasses()
    {
        $this->app->bind(IPatternRepository::class, PatternRepository::class);
    }
}
