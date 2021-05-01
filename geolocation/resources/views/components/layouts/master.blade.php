<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Geolocation') }}</title>

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('svgs/logo-sylent-n-circle.svg') }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>

    <body class="min-h-screen antialiased bg-gray-100" data-barba="wrapper">
        <div class="wrapper" data-barba="container" data-barba-namespace="{{ Route::currentRouteName() }}">
            {{ $slot }}
        </div>
    </body>
    
</html>