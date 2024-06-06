<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Managers\Author\{ AuthorManagerInterface, AuthorManager};
use App\Managers\Customer\{ CustomerManagerInterface, CustomerManager};
use App\Managers\Book\{ BookManagerInterface, BookManager};

class ManagersServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            AuthorManagerInterface::class,
            AuthorManager::class
        );

        $this->app->bind(
            CustomerManagerInterface::class,
            CustomerManager::class
        );

        $this->app->bind(
            BookManagerInterface::class,
            BookManager::class
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
