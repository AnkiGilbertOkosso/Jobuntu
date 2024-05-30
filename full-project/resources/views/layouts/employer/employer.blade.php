<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Jobuntu') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/91ebbc8982.js" crossorigin="anonymous"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body {
                font-family: "Quicksand", sans-serif;
            }
        </style>
        <style>
            th:nth-child(1),
            td:nth-child(1) {
                width: 300px;
            }

            .inset-l-full {
                left: 100%;
            }
        </style>
    </head>
    <body>
            @include('layouts.employer.navbar')

    <!-- Dashboard -->
    <div class="container mx-auto flex">
        @include('layouts.employer.sidebar')
        <!-- Main Content -->
        <div class="flex-1 px-5">
            @yield('content')
        </div>
    </div>

    <footer class="border-t">
        <div class="items-center justify-center">
            <h3 class="text-sm text-gray-400 text-center py-4">©2024
                Jobuntu - Job Portal. All rights Reserved.</h3>
        </div>
    </footer>
    <script>
        // Toggle mobile menu
        document
            .getElementById("menu-toggle")
            .addEventListener("click", function () {
                var menu = document.getElementById("navbar-default");
                menu.classList.toggle("hidden");
            });
    </script>

    </body>
</html>
