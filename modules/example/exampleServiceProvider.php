<?php

namespace Modules\example;

use Illuminate\Support\ServiceProvider;

class exampleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->loadInterfaceRepository();
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesAuth();
        $this->loadInterfaceService();
        $this->loadViewPage();
    }

    protected function loadRoutesAuth(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }

    protected function loadViewPage()
    {
        $this->loadViewsFrom(__DIR__.'/Views', "example");

    }

    protected function loadInterfaceRepository(): void
    {
    }

    protected function loadInterfaceService(): void
    {
    }
}
