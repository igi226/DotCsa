<?php

namespace App\Providers;

use App\Repository\Cms\CmsInterface;
use App\Repository\Cms\CmsRepository;
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
        $this->app->bind( CmsInterface::class, CmsRepository::class);
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
