@extends('layouts.master')

@section('content')

    {{ Form::model($registration, ['url' => '/register', 'class' => 'form-horizontal']) }}

        {{ Html::bsPanel('Personal Information',
            Form::bsText('first_name', 'First Name') .
            Form::bsText('middle_name', 'Middle Name') .
            Form::bsText('last_name', 'Last Name') .
            Form::bsText('address', 'Address') .
            Form::bsText('city', 'City') .
            Form::bsText('state', 'State/Province') .
            Form::bsText('zip', 'Zip/Postal Code') .
            Form::bsCountry('country', 'Country') .
            Form::bsPhone('phone', 'Phone') .
            Form::bsText('email', 'Email') .
            Form::bsDate('birth_date', 'Birth Date') .
            Form::bsSelect('gender', 'Gender', config('registration-form.genders')) .
            Form::bsSelect('shirt_size', 'Shirt Size', config('registration-form.shirtSizes'))
        ) }}

        {{ Html::bsPanel('Travel Information',
            Form::bsSelect('travel_method', 'Travel Method', config('registration-form.travelMethods'), '-- Select --', 3, 9) .
            Form::bsRadio('travel_method', 'Travel Method', ['air' => 'Air', 'car' => 'Car'], 3, 9) .
            Form::bsText('air_home_airport', 'Home Airport', 3, 9) .
            Form::bsSelect('air_arrival_date', 'Desired Arrival Date/Time', $airDesiredArrival, '-- Select --', 3, 9) .
            Form::bsSelect('air_departure_date', 'Desired Departure Date/Time', $airDesiredDeparture, '-- Select --', 3, 9) .
            Form::bsSelect('air_booking_preference', 'Booking Preference', config('registration-form.airWhosBooking'), '-- Select --', 3, 9) .
            Form::bsSelect('car_arrival_date', 'Arrival in Spokane', $carArrivalInSpokane, '-- Select --', 3, 9) .
            Form::bsSelect('car_departure_date', 'Departure from Spokane', $carDepartureFromSpokane, '-- Select --', 3, 9) .
            Form::bsText('car_mileage', 'Car Travel Distance', 3, 9) .
            Form::bsTextarea('travel_comments', 'Comments Regarding Travel', 2, 3, 9)
        ) }}

        {{ Html::bsPanel('Race Profile',
            Form::bsSelect('race_division', 'What division are you competing in?', ['Women - Juniors','Men - Juniors','Women - Open','Men - Open','Men - Masters','T51 Quad','T52 Quad'], '-- Select --', 6, 6) .
            Form::bsRadio('blomsday_rookie', 'Is this your first time competing in Bloomsday?', [1 => 'Yes', 0 => 'No'], 6, 6)
        ) }}

        {{ Html::bsPanel('Race History',
            '<p>Please enter your most recent three races that you have competed in.</p>',
            null,'
            <table class="table" id="race_history">
                <thead>
                    <tr>
                        <th>&nbsp;</th>
                        <th class="text-center">Year</th>
                        <th class="text-center">Race Name</th>
                        <th class="text-center">Distance</th>
                        <th class="text-center">Time</th>
                        <th class="text-center">Position</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td colspan="6" class="text-right">
                            <a href="#" class="btn btn-info" id="race_history_add">
                                <span class="glyphicon glyphicon-plus"></span>&nbsp;
                                Add Another Race
                            </a>
                        </td>
                    </tr>
                </tfoot>
                <tbody></tbody>
            </table>'
        ) }}

        {{ Html::bsPanel('Additional Information',
            Form::bsTextarea('roommate_preference', 'Roommate Preference', 2, 3, 9) .
            Form::bsTextarea('general_comments', 'Additional Comments', 2, 3, 9)
        ) }}

        <input type="submit" value="Submit">

    {{ Form::close() }}

@endsection