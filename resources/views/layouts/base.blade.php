<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ page_title($title?? null) }}</title>

    </head>
    <body>
        @yield('content')
        @include('layouts.partials._footer')

    </body>
</html>
