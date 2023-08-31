<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />

  @vite('resources/css/app.css')
</head>
<body>
    <main class="min-h-screen w-full bg-gray-100 text-gray-700" x-data="layout">
        <!-- header page -->
        <header class="flex w-full items-center justify-between border-b-2 border-gray-200 bg-white p-2">
            <!-- logo -->
            <div class="flex items-center space-x-2">
                <button type="button" class="text-3xl" @click="asideOpen = !asideOpen"><i class="bx bx-menu"></i></button>
                <div>Formulario</div>
            </div>

            <!-- button profile -->
            <div>
                <button type="button" @click="profileOpen = !profileOpen" @click.outside="profileOpen = false"
                    class="h-9 w-9 overflow-hidden rounded-full">
                    <img src="https://plchldr.co/i/40x40?bg=111111" alt="plchldr.co" />
                </button>

                <!-- dropdown profile -->
                <div class="absolute right-2 mt-1 w-48 divide-y divide-gray-200 rounded-md border border-gray-200 bg-white shadow-md"
                    x-show="profileOpen" x-transition>
                    <div class="flex items-center space-x-2 p-2">
                        <img src="https://plchldr.co/i/40x40?bg=111111" alt="plchldr.co" class="h-9 w-9 rounded-full" />
                        <div class="font-medium">Negrito Feliz :).</div>
                    </div>

                    <div class="flex flex-col space-y-3 p-2">
                        <a href="#" class="transition hover:text-blue-600">My Profile</a>
                        <a href="#" class="transition hover:text-blue-600">Edit Profile</a>
                        <a href="#" class="transition hover:text-blue-600">Settings</a>
                    </div>

                    <div class="p-2">
                        <button class="flex items-center space-x-2 transition hover:text-blue-600">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                </path>
                            </svg>
                            <div>Log Out</div>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <div class="flex">
            <!-- aside -->
            <aside class="flex w-72 flex-col space-y-2 border-r-2 border-gray-200 bg-white p-2" style="height: 90.5vh"
                x-show="asideOpen">
                <a href="#" class="flex items-center space-x-1 rounded-md px-2 py-3 hover:bg-gray-100 hover:text-blue-600">
                    <span class="text-2xl"><i class="bx bx-home"></i></span>
                    <span>Dashboard</span>
                </a>
            </aside>

            <!-- main content page -->

            <div class="w-full mx-auto sm:px-6 lg:px-8 mt-8">
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="{{ asset('js/validate-checkbox.js') }}"></script>

    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("layout", () => ({
                profileOpen: false,
                asideOpen: true,
            }));
        });

    </script>
</html>
