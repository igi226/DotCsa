<?php

namespace App\Providers;

use App\Repository\DotProfessional\DotcsaProfessionalInterface;
use App\Repository\DotProfessional\DotcsaProfessionalRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DotcsaProfessionalInterface::class, DotcsaProfessionalRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
