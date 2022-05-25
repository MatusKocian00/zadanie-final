<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CarSuspensionModel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway';
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .flex-col{
            flex-direction: column;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .top-left {
            position: absolute;
            left: 10px;
            top: 18px;
        }


        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        
        .links>a:hover {
            text-decoration: underline;
        }

        .links>.active {
            display: none;
        }

        .lin .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <x-language-switcher class="top-left links"></x-language-switcher>
        @if (Route::has('login') && Auth::check())
        <div class="top-right links">
            <a href="{{ url('/dashboard') }}">Dashboard</a>
            <a href="{{ url('/application') }}">{{ __('messages.application') }}</a>
        </div>
        @elseif (Route::has('login') && !Auth::check())
        <div class="top-right links">
            <a href="{{ url('/login') }}">{{ __('auth.login') }}</a>
            <a href="{{ url('/register') }}">{{ __('auth.register') }}</a>
        </div>
        @endif

        <div class='flex-center flex-col'>
            <div class="content">
                <div class="title m-b-md">
                    {{__('messages.welcome')}}
                </div>
            </div>

            <x-application-logo />
        </div>
    </div>
</body>
</html>