<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider;

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
        
        Gate::define('isAdmin',function($user){
            return $user->role=='admin';
        });
        Gate::define('isDriver',function($user){
            return $user->role=='driver';
        });
        Gate::define('isPassenger',function($user){
            return $user->role=='passenger';
        });
    }
}
