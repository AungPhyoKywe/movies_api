<?php

namespace Movies\Api\Movies\Providers;

use Illuminate\Support\ServiceProvider;
use Movies\Api\Movies\Repositories\Eloquent\MovieRepository;
use Movies\Api\Movies\Repositories\MovieRepositoryInterface;

class BindMovieServiceProvider extends ServiceProvider
{
    /**
     * Register the service providers.
     */
    public function register()
    {
        $this->app->bind(
            MovieRepositoryInterface::class,
            MovieRepository::class
        );
    }
}
