<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="antialiased">
        @session('message')
            <div class="" style="text-align: center; font-size: 30px; background-color: #ffe600;";>
                {{ session('message') }}
            </div>
        @endsession

    {{ $slot }}
    </body>
</html>