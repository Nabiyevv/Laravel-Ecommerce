<?php

namespace App\Providers;

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        View::composer(['frontend.partials.navbar','frontend.shop'], function ($view) {
            $controller = new CategoryController();
            $categories = $controller();
            $view->with('categories', $categories);
        });
    }
}
