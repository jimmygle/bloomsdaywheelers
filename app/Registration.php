<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{

    protected $guarded = ['status'];

    /**
     * Gets all the past race results for this registration.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pastResults()
    {
        return $this->hasMany('App\RegistrantPastResult');
    }

    /**
     * Relates this registration to the associated configuration for this year's Bloomsday.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function configuration()
    {
        return $this->belongsTo('App\Configuration', 'bloomsday_year', 'bloomsday_year');
    }

    /**
     * Relates this registration to the associated category.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo('App\Country', 'country_abbreviation', 'abbreviation');
    }

}
