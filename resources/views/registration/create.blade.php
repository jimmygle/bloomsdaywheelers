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
        // country dropdown
        // phone input texts
        // email input
        // birth date input
        {{ Form::bsSelect('gender', 'Gender', config('registration-form.genders')) }}
        {{ Form::bsSelect('shirt_size', 'Shirt Size', config('registration-form.shirtSizes')) }}
        {{ Form::bsSelect('travel_method', 'Travel Method', config('registration-form.travelMethods')) }}

        // travel method select list
        {{ Form::bsText('car_mileage', 'Car Travel Distance') }}

    {{ Form::close() }}

@endsection