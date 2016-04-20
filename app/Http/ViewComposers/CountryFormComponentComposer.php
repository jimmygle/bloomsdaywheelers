<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Country;

class CountryFormComponentComposer
{
    protected $country;

    public function __construct(Country $country)
    {
        $this->country = $country;
    }

    public function compose(View $view)
    {
        $countries = $this->country
            ->all()
            ->sortBy('name')
            ->keyBy('abbreviation')
            ->transform(function($value, $key) {
                return $value['name'];
            })
            ->toArray();

        $view->with('countries', $countries);
    }
}