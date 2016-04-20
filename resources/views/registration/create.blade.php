@extends('layouts.master')

@section('content')

    {{ Form::model($registration, ['url' => '/registrations', 'class' => 'form-horizontal']) }}

        {{ Form::bsText('first_name', 'First Name') }}
        {{ Form::bsText('middle_name', 'Middle Name') }}
        {{ Form::bsText('last_name', 'Last Name') }}
        {{ Form::bsText('address', 'Address') }}
        {{ Form::bsText('city', 'City') }}
        {{ Form::bsText('state', 'State/Province') }}
        {{ Form::bsText('zip', 'Zip/Postal Code') }}
        {{ Form::bsCountry('country', 'Country') }}
        {{ Form::bsPhone('phone', 'Phone') }}
        {{ Form::bsText('email', 'Email') }}
        {{ Form::bsDate('birth_date', 'Birth Date') }}
        {{ Form::bsSelect('gender', 'Gender', config('registration-form.genders')) }}
        {{ Form::bsSelect('shirt_size', 'Shirt Size', config('registration-form.shirtSizes')) }}
        {{ Form::bsSelect('travel_method', 'Travel Method', config('registration-form.travelMethods')) }}
        {{ Form::bsRadio('travel_method', 'Travel Method', ['air' => 'Air', 'car' => 'Car']) }}
        {{ Form::bsText('air_home_airport', 'Home Airport') }}
        {{ Form::bsSelect('air_arrival_date', 'Desired Arrival Date/Time', $airDesiredArrival) }}
        {{ Form::bsSelect('air_departure_date', 'Desired Departure Date/Time', $airDesiredDeparture) }}
        {{ Form::bsSelect('air_booking_preference', 'Booking Preference', config('registration-form.airWhosBooking')) }}

        {{ Form::bsSelect('car_arrival_date', 'Arrival in Spokane', $carArrivalInSpokane) }}
        {{ Form::bsSelect('car_departure_date', 'Departure from Spokane', $carDepartureFromSpokane) }}

        {{ Form::bsText('car_mileage', 'Car Travel Distance') }}

    {{ Form::close() }}

@endsection