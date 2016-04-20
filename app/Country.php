<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    public function registrations()
    {
        return $this->hasMany('App\Registration', 'abbreviation', 'country_abbreviation');
    }

}