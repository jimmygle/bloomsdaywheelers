<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Html;

class HtmlComponentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Html::component('bsPanel', 'components.panel', ['header' => null, 'content' => null, 'footer' => null, 'table' => null, 'context' => null, 'scrollable' => false, 'scrollableHeight' => '300px']);
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
