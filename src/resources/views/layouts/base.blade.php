<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    @livewireStyles
    </head>
    <body class="font-sans antialiased">
        @livewire('header-menu')
        @yield('content')
        @livewireScripts
</body>
</html>