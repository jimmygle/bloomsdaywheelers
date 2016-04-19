<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistrantPastResult extends Model
{

    /**
     * Relates this past result to the its registration.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registration()
    {
        return $this->belongsTo('App\Registration');
    }

}
