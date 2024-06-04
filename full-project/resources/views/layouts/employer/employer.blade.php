<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Jobuntu') }}</title>
    @notifyCss

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
        <x-notify::notify />

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
            .addEventListener("click", function() {
                var menu = document.getElementById("navbar-default");
                menu.classList.toggle("hidden");
            });
    </script>
    <script>
        function toggleSelection(button, checkboxId) {
            button.classList.toggle("bg-primary");
            button.classList.toggle("text-white");

            var checkbox = document.getElementById(checkboxId);
            checkbox.checked = !checkbox.checked;
        }
        document.addEventListener('DOMContentLoaded', function() {
            const countrySelect = document.getElementById('country');
            const citySelect = document.getElementById('city');

            countrySelect.addEventListener('change', function() {
                const selectedCountry = countrySelect.value;

                // Clear previous city options
                citySelect.innerHTML = '<option value="">Select...</option>';

                if (selectedCountry) {
                    fetch(`https://countriesnow.space/api/v0.1/countries/cities`, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                country: selectedCountry
                            }),
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.error === false) {
                                data.data.forEach(function(city) {
                                    const option = document.createElement('option');
                                    option.value = city;
                                    option.textContent = city;
                                    citySelect.appendChild(option);
                                });
                            } else {
                                console.error('Error fetching cities:', data.msg);
                            }
                        })
                        .catch(error => console.error('Error fetching cities:', error));
                }
            });
        });
    </script>
    <script>
        const tagsInput = document.getElementById('tagsInput');
        const tagsContainer = document.getElementById('tagsContainer');
        const hiddenTagsInput = document.getElementById('hiddenTagsInput');
        let tagsArray = [];

        function addTag(tag) {
            // Create the tag element
            const tagElement = document.createElement('span');
            tagElement.textContent = tag.trim();
            tagElement.classList.add('bg-blue-100', 'text-blue-800', 'text-sm', 'font-semibold', 'mr-2', 'px-2.5', 'py-0.5',
                'rounded');

            // Append the tag element to the tags container
            tagsContainer.appendChild(tagElement);

            // Update the tags array and hidden input value
            tagsArray.push(tag.trim());
            hiddenTagsInput.value = tagsArray.join(',');
        }

        // Event listener for keypress
        tagsInput.addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                const tag = tagsInput.value.trim();
                if (tag) {
                    addTag(tag);
                    tagsInput.value = '';
                }
                event.preventDefault();
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.tab');
            const contents = document.querySelectorAll('.tab-content');

            tabs.forEach((tab, index) => {
                tab.addEventListener('click', () => {
                    tabs.forEach(t => t.classList.add('text-gray-400'));
                    tab.classList.remove('text-gray-400');
                    tab.classList.add('text-primary');

                    contents.forEach(content => content.classList.add('hidden'));
                    contents[index].classList.remove('hidden');
                });
            });
        });
    </script>
    <script>
        document.getElementById('logo').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('logo-preview');
                    preview.src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('dropzone-label').addEventListener('click', function(event) {
            if (event.target.tagName !== 'INPUT') {
                document.getElementById('logo').click();
            }
        });
        document.getElementById('banner_image').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('banner-preview');
                    preview.src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('banner-label').addEventListener('click', function(event) {
            if (event.target.tagName !== 'INPUT') {
                document.getElementById('banner_image').click();
            }
        });
    </script>
    @notifyJs
</body>

</html>
