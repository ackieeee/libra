<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MedicineProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\MedicineRepositoryInterface',
            'App\Repositories\MedicineRepository'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
