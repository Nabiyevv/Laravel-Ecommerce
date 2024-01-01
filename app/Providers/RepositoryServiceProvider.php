<?php

namespace App\Providers;

use App\Repositories\HomeRepository;
use App\Repositories\ShopRepository;
use App\Repositories\ProductRepository;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\HomeRepositoryInterface;
use App\Interfaces\ShopRepositoryInterface;
use App\Interfaces\ProductRepositoryInterface;

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
        $this->app->bind(
            ProductRepositoryInterface::class,
            ProductRepository::class,
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
