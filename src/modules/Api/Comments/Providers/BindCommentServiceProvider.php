<?php

namespace Movies\Api\Comments\Providers;

use Illuminate\Support\ServiceProvider;
use Movies\Api\Comments\Repositories\CommentRepositoryInterface;
use Movies\Api\Comments\Repositories\Eloquent\CommentRepository;

class BindCommentServiceProvider extends ServiceProvider
{
    /**
     * Register the service providers.
     */
    public function register()
    {
        $this->app->bind(
            CommentRepositoryInterface::class,
            CommentRepository::class
        );
    }
}
