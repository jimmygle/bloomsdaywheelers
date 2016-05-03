<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.master', 'App\Http\ViewComposers\MasterLayoutComposer');
        view()->composer('registration.form', 'App\Http\ViewComposers\RegistrationFormComposer');
        view()->composer('components.form.country', 'App\Http\ViewComposers\CountryFormComponentComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
