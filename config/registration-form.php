<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Genders (must match database `gender` enum values)
    |--------------------------------------------------------------------------
    */

    'genders' => [
        'm' => 'Male',
        'f' => 'Female',
    ],

    /*
    |--------------------------------------------------------------------------
    | Shirt Size Options (must match database `shirt_size` enum values)
    |--------------------------------------------------------------------------
    */

    'shirtSizes' => [
        'ym'  => 'Youth Medium',
        'yl'  => 'Youth Large',
        's'   => 'Small',
        'm'   => 'Medium',
        'l'   => 'Large',
        'xl'  => 'X-Large',
        'xxl' => 'XX-Large'
    ],

    /*
    |--------------------------------------------------------------------------
    | Travel Methods (must match database `travel_method` enum values)
    |--------------------------------------------------------------------------
    */

    'travelMethods' => [
        'air' => 'Air',
        'car' => 'Car',
    ]


];
