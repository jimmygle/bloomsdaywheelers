<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Country;

class ProfileComposer
{
    protected $country;

    public function __construct(Country $country)
    {
        $this->country = $country;
    }

    public function compose(View $view)
    {
        $view->with('countries', $this->country->get());
    }
}