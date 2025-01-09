<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('assets/img/core-img/favicon.ico') }}">

        <!-- Core Stylesheet -->
        <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    </head>
    <body>
        <!-- Preloader -->
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="cssload-container">
                <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
            </div>
        </div>
        
        <x-user.header />

        <main>
            @yield('content')
        </main>
        
        <x-user.footer />

        @livewireScripts

        <!-- ##### All Javascript Script ##### -->
        <script src="{{ asset('assets/js/jquery/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/active.js') }}"></script>
        <!-- ##### All Javascript Script ##### -->
    </body>
</html>
