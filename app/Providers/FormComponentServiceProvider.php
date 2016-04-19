<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormComponentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('bsText', 'components.form.text', ['name', 'label', 'labelColumns' => 2, 'inputColumns' => 10]);
        Form::component('bsSelect', 'components.form.select', ['name', 'label', 'options' => [], 'labelColumns' => 2, 'inputColumns' => 10]);
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
