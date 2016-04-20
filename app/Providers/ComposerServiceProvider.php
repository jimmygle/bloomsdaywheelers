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
        view()->composer('registration.create', 'App\Http\ViewComposers\RegistrationFormComposer');
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
