<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bloomsday Wheelers</title>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <style type="text/css">
            body, html {
                background-color: {{ $bgColor or '#fff' }}
            }
            div.scrollable {
                overflow: auto;
                margin: 10px 0;
            }
            div.header {
                background: url('{{ asset("header.jpg") }}') no-repeat;
                background-attachment: fixed;
                background-size: contain;
                min-height: 175px;
                max-height: 225px;
            }
            .no-margin-bottom {
                margin-bottom: 0px;
            }
        </style>

        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        @if (isset($isRegistrationWarningVisible) && $isRegistrationWarningVisible == true)
            @include('partials.registration-warning')
        @endif

        <div class="header">
            {{--<h1>Bloomsday Elite Wheelchair Division <small>{{ $readableBloomsdayDate or '' }}</small></h1>--}}
        </div>

        <div class="container">

            @yield('content')

        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="{{ asset('app.js') }}"></script>

    </body>
</html>