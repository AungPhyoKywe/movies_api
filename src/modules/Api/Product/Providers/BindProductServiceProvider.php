<?php

namespace Movies\Api\Product\Providers;

use Movies\Api\Product\Repositories\Eloquent\ProductRepository;
use Movies\Api\Product\Repositories\ProductRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class BindProductServiceProvider extends ServiceProvider
{
    /**
     * Register the service providers.
     */
    public function register()
    {
        $this->app->bind(
            ProductRepositoryInterface::class,
            ProductRepository::class
        );
    }
}
