<?php

namespace App\Providers;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\{ContactInterface, UserInterface, AuthInterface};
use App\Repositories\{ContactRepository, UserRepository, AuthRepository};

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ContactInterface::class, ContactRepository::class);
        $this->app->singleton(UserInterface::class, UserRepository::class);
        $this->app->singleton(AuthInterface::class, AuthRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        JsonResource::withoutWrapping();
    }
}
