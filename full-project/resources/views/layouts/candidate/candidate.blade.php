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
    <style>
        .active {
            display: block;
        }

        .tab-link.active {
            border-bottom: 2px solid blue;
            color: blue;
        }
    </style>
</head>

<body class>
    @include('layouts.candidate.navbar')


    <!-- Dashboard -->
    <div class="container mx-auto flex">

        <!-- Sidebar -->
        @include('layouts.candidate.sidebar')

        <!-- Main Content -->
        <div class="flex-1 px-5">
            <!-- Overview -->
            @yield('content')
        </div>
    </div>
    <footer class="border-t">
        <div class="items-center justify-center">
            <h3 class="text-sm text-gray-400 text-center py-4">©2024
                Jobuntu - Job Portal. All rights Reserved.</h3>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Toggle mobile menu
        document
            .getElementById("menu-toggle")
            .addEventListener("click", function () {
                var menu = document.getElementById("navbar-default");
                menu.classList.toggle("hidden");
            });
    </script>
    <script>
        function openTab(event, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].classList.add("hidden");
                tabcontent[i].classList.remove("active");
            }
            tablinks = document.getElementsByClassName("tab-link");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("active");
                tablinks[i].style.color = "gray";
            }
            document.getElementById(tabName).classList.remove("hidden");
            document.getElementById(tabName).classList.add("active");
            event.currentTarget.classList.add("active");
            event.currentTarget.style.color = "blue";
        }
    </script>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
</body>

</html>
