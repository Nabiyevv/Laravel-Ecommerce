<?php

namespace App\Providers;

use App\Interfaces\HomeRepositoryInterface;
use App\Interfaces\ShopRepositoryInterface;
use App\Repositories\HomeRepository;
use App\Repositories\ShopRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            HomeRepositoryInterface::class,
            HomeRepository::class,
        );
        $this->app->bind(
            ShopRepositoryInterface::class,
            ShopRepository::class,
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
