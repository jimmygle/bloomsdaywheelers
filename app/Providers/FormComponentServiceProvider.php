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
        Form::component('bsSelect', 'components.form.select', ['name', 'label', 'options' => [], 'placeholder' => '-- Select --', 'labelColumns' => 2, 'inputColumns' => 10]);
        Form::component('bsCountry', 'components.form.country', ['name', 'label', 'placeholder' => '-- Select --', 'labelColumns' => 2, 'inputColumns' => 10]);
        Form::component('bsPhone', 'components.form.phone', ['name', 'label', 'labelColumns' => 2, 'inputColumns' => 10]);
        Form::component('bsDate', 'components.form.date', ['name', 'label', 'labelColumns' => 2, 'inputColumns' => 10]);
        Form::component('bsRadio', 'components.form.radio', ['name', 'label', 'options' => [], 'labelColumns' => 2, 'inputColumns' => 10]);
        Form::component('bsTextarea', 'components.form.textarea', ['name', 'label', 'rows' => 2, 'labelColumns' => 2, 'inputColumns' => 10]);
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
