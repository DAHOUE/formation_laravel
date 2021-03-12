<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

    </head>
    <body>
        @yield('content')
        <footer>

           <p>
            &copy; Copyright {{ date('Y') }}
            @if(Route::is('app_home'))
            &middot;<a href="{{ route('app_about') }}">Propos de nous<a>
            @endif


               </p>
        </footer>

    </body>
</html>
