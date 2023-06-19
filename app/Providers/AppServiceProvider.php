<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< Updated upstream
=======
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use App\NewUserCreator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

>>>>>>> Stashed changes

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(CreatesNewUsers::class, NewUserCreator::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
