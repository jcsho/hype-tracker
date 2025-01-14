<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'HypeTracker') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @livewireStyles
    </head>
    <body class="font-sans antialiased lg:container lg:mx-auto">
        @include('layouts.header')

        @yield('content')

        @livewireScripts
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
