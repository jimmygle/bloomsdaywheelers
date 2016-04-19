<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{

    /**
     * Gets all the registrations for this year.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registrations()
    {
        return $this->hasMany('App\Registration');
    }

}
