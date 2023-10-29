<?php

namespace App\Providers;

use App\Repositories\Eloquent\PostRepository;
use App\Repositories\Eloquent\ThreadRepository;
use App\Repositories\PostRepositoryInterface;
use App\Repositories\ThreadRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            ThreadRepositoryInterface::class,
            ThreadRepository::class
        );
        $this->app->bind(
            PostRepositoryInterface::class,
            PostRepository::class
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
