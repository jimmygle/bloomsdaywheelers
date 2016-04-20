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
    ],

    /*
    |--------------------------------------------------------------------------
    | Travel Time Preferences (must match database `air_arrival_preference` enum values)
    |--------------------------------------------------------------------------
    */

    'travelTimePreferences' => [
        'morning' => 'Morning',
        'afternoon' => 'Afternoon',
        'evening' => 'Evening'
    ],

    /*
    |--------------------------------------------------------------------------
    | Who's Booking Airfare Preference
    |--------------------------------------------------------------------------
    */

    'airWhosBooking' => [
        'bloomsday' => 'Bloomsday - I want Bloomsday to book my flight',
        'self' => 'Self - I want to book my own flight (with Bloomsday\'s aproval)'
    ],

    /*
    |--------------------------------------------------------------------------
    | Months
    |--------------------------------------------------------------------------
    */

    'months' => [
        1 => 'January',
        2 => 'February',
        3 => 'March',
        4 => 'April',
        5 => 'May',
        6 => 'June',
        7 => 'July',
        8 => 'August',
        9 => 'September',
        10 => 'October',
        11 => 'November',
        12 => 'December',
    ]

];
