<?php

namespace App\Providers;

use App\Interfaces\UserOrderRepositoryInterface;
use App\Repositories\UserOrderRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserOrderRepositoryInterface::class, UserOrderRepository::class);
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
