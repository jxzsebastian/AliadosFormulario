    <!-- Navbar -->
    <header class="relative bg-white dark:bg-darker">
        <div class="flex items-center justify-between p-2 border-b dark:border-blue-800">
            <!-- Mobile menu button -->
            <button @click="isMobileMainMenuOpen = !isMobileMainMenuOpen"
                class="p-1 text-blue-400 transition-colors duration-200 rounded-md bg-blue-50 hover:text-blue-600 hover:bg-blue-100 dark:hover:text-light dark:hover:bg-blue-700 dark:bg-dark md:hidden focus:outline-none focus:ring">
                <span class="sr-only">Menu</span>
                <span aria-hidden="true">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </span>
            </button>

            <!-- Brand -->
            <a href="#"
                class="inline-block text-2xl font-bold tracking-wider text-blue-700 uppercase dark:text-light">
            </a>

            <!-- Mobile sub menu button -->
            <button @click="isMobileSubMenuOpen = !isMobileSubMenuOpen"
                class="p-1 text-blue-400 transition-colors duration-200 rounded-md bg-blue-50 hover:text-blue-600 hover:bg-blue-100 dark:hover:text-light dark:hover:bg-blue-700 dark:bg-dark md:hidden focus:outline-none focus:ring">
                <span class="sr-only">Sub menu</span>
                <span aria-hidden="true">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </span>
            </button>

            <!-- Desktop Right buttons -->


            <nav aria-label="Secondary" class="hidden space-x-4 md:flex md:items-center">
                    <button aria-hidden="true" class=" relative focus:outline-none" x-cloak @click="toggleTheme">
                        <div class="w-12 h-6 transition bg-blue-100 rounded-full outline-none dark:bg-blue-400"></div>
                        <div class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 transition-all duration-150 transform scale-110 rounded-full shadow-sm"
                            :class="{
                                'translate-x-0 -translate-y-px  bg-white text-blue-700': !
                                    isDark,
                                'translate-x-6 text-blue-100 bg-blue-800': isDark
                            }">
                            <svg x-show="!isDark" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                            </svg>
                            <svg x-show="isDark" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </div>
                    </button>

                    @if (Auth::user())
                    <!-- Notification button -->
                    <button @click="openNotificationsPanel"
                        class="relative p-2 text-blue-400 transition-colors duration-200 rounded-full bg-blue-50 hover:text-blue-600 hover:bg-blue-100 dark:hover:text-light dark:hover:bg-blue-700 dark:bg-dark focus:outline-none focus:bg-blue-100 dark:focus:bg-blue-700 focus:ring-blue-800">
                            @if (auth()->user()->unreadNotifications->count() > 0)
                            <span class="absolute -top-2 left-6 rounded-full bg-red-500 p-0.5 px-2 text-sm text-red-50">{{ auth()->user()->unreadNotifications->count() }}</span>
                            @endif
                        <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>

                    <!-- User avatar button -->
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open; $nextTick(() => { if(open){ $refs.userMenu.focus() } })"
                            type="button" aria-haspopup="true" :aria-expanded="open ? 'true' : 'false'"
                            class="p-2 text-blue-400 transition-colors duration-200 rounded-full bg-blue-50 hover:text-blue-600 hover:bg-blue-100 dark:hover:text-light dark:hover:bg-blue-700 dark:bg-dark focus:outline-none focus:bg-blue-100 dark:focus:bg-blue-700 focus:ring-blue-800">
                            <span class="sr-only">User menu</span>

                            <svg aria-hidden="true" role="img" width="32" height="32"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256">
                                <path fill="currentColor"
                                    d="M172 120a44 44 0 1 1-44-44a44 44 0 0 1 44 44Zm60 8A104 104 0 1 1 128 24a104.2 104.2 0 0 1 104 104Zm-16 0a88 88 0 1 0-153.8 58.4a81.3 81.3 0 0 1 24.5-23a59.7 59.7 0 0 0 82.6 0a81.3 81.3 0 0 1 24.5 23A87.6 87.6 0 0 0 216 128Z">
                                </path>
                            </svg>

                            </svg>

                        </button>

                        <!-- User dropdown menu -->
                        <div x-show="open" x-ref="userMenu" x-transition:enter="transition-all transform ease-out"
                            x-transition:enter-start="translate-y-1/2 opacity-0"
                            x-transition:enter-end="translate-y-0 opacity-100"
                            x-transition:leave="transition-all transform ease-in"
                            x-transition:leave-start="translate-y-0 opacity-100"
                            x-transition:leave-end="translate-y-1/2 opacity-0" @click.away="open = false"
                            @keydown.escape="open = false"
                            class="absolute right-0 w-48 z-10 py-1 bg-white rounded-md shadow-lg top-12 ring-1 ring-black ring-opacity-5 dark:bg-dark focus:outline-none"
                            tabindex="-1" role="menu" aria-orientation="vertical" aria-label="User menu">

                            <p role="menuitem"
                                class="block px-4 py-2 text-sm text-gray-700 transition-colors  dark:text-light border border-b-gray-300">
                                Bienvenido, {{Auth::user()->name}}
                            </p>

                            <a href="{{route('actualizado', Auth::user()->id)}}" role="menuitem"
                                class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-blue-600">
                                Configurar
                            </a>
                            <a href="{{ route('logout') }}" role="menuitem"
                                class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-blue-600">
                                Cerrar Sesión
                            </a>
                        </div>


                    </div>
                    @else
                    <a type="button" href="{{ route('login.index') }}" type="button"
                    class=" mr-4 dark:bg-slate-800 dark:border-gray-700 dark:text-white inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Ingresar</a>
                    @endif

                </nav>

            <!-- Mobile sub menu -->
            <nav x-transition:enter="transition duration-200 ease-in-out transform sm:duration-500"
                x-transition:enter-start="-translate-y-full opacity-0"
                x-transition:enter-end="translate-y-0 opacity-100"
                x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500"
                x-transition:leave-start="translate-y-0 opacity-100"
                x-transition:leave-end="-translate-y-full opacity-0" x-show="isMobileSubMenuOpen"
                @click.away="isMobileSubMenuOpen = false"
                class="absolute z-50 flex items-center p-4 bg-white rounded-md shadow-lg dark:bg-darker top-16 inset-x-4 md:hidden"
                aria-label="Secondary">
                <div class="space-x-2   ">
                    <!-- Toggle dark theme button -->
                    <button aria-hidden="true" class="relative focus:outline-none" x-cloak @click="toggleTheme">
                        <div class="w-12 h-6 transition bg-blue-100 rounded-full outline-none dark:bg-blue-400"></div>
                        <div class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 transition-all duration-200 transform scale-110 rounded-full shadow-sm"
                            :class="{
                                'translate-x-0 -translate-y-px  bg-white text-blue-700': !
                                    isDark,
                                'translate-x-6 text-blue-100 bg-blue-800': isDark
                            }">
                            <svg x-show="!isDark" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                            </svg>
                            <svg x-show="isDark" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                        </div>
                    </button>
                        <!-- Notification button -->
                        @if (auth()->user())

                        <button @click="openNotificationsPanel(); $nextTick(() => { isMobileSubMenuOpen = false })"
                            class="relative p-2 text-blue-400 transition-colors duration-200 rounded-full bg-blue-50 hover:text-blue-600 hover:bg-blue-100 dark:hover:text-light dark:hover:bg-blue-700 dark:bg-dark focus:outline-none focus:bg-blue-100 dark:focus:bg-blue-700 focus:ring-blue-800">
                                @if (auth()->user()->unreadNotifications->count() > 0)
                                <span class="absolute -top-2 left-6 rounded-full bg-red-500 p-0.5 px-2 text-sm text-red-50">{{ auth()->user()->unreadNotifications->count() }}</span>
                                @endif

                            <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">

                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>

                        @endif
                </div>

                <!-- User avatar button -->
                    <div class="relative ml-auto" x-data="{ open: false }">
                        @if (auth()->user())

                    <button @click="open = !open; $nextTick(() => { if(open){ $refs.userMenu.focus() } })"
                        type="button" aria-haspopup="true" :aria-expanded="open ? 'true' : 'false'"
                        class="p-2 text-blue-400 transition-colors duration-200 rounded-full bg-blue-50 hover:text-blue-600 hover:bg-blue-100 dark:hover:text-light dark:hover:bg-blue-700 dark:bg-dark focus:outline-none focus:bg-blue-100 dark:focus:bg-blue-700 focus:ring-blue-800">
                        <span class="sr-only">User menu</span>

                        <svg aria-hidden="true" role="img" width="32" height="32"
                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256">
                            <path fill="currentColor"
                                d="M172 120a44 44 0 1 1-44-44a44 44 0 0 1 44 44Zm60 8A104 104 0 1 1 128 24a104.2 104.2 0 0 1 104 104Zm-16 0a88 88 0 1 0-153.8 58.4a81.3 81.3 0 0 1 24.5-23a59.7 59.7 0 0 0 82.6 0a81.3 81.3 0 0 1 24.5 23A87.6 87.6 0 0 0 216 128Z">
                            </path>
                        </svg>

                        </svg>

                    </button>

                    <!-- User dropdown menu -->
                    <div x-show="open" x-transition:enter="transition-all transform ease-out"
                        x-transition:enter-start="translate-y-1/2 opacity-0"
                        x-transition:enter-end="translate-y-0 opacity-100"
                        x-transition:leave="transition-all transform ease-in"
                        x-transition:leave-start="translate-y-0 opacity-100"
                        x-transition:leave-end="translate-y-1/2 opacity-0" @click.away="open = false"
                        class="absolute right-0 w-48 py-1 origin-top-right bg-white rounded-md shadow-lg top-12 ring-1 ring-black ring-opacity-5 dark:bg-dark"
                        role="menu" aria-orientation="vertical" aria-label="User menu">
                        <p  role="menuitem"
                            class="block px-4 py-2 text-sm text-gray-700 transition-colors border border-b-gray-300 dark:text-light dark:hover:bg-blue-600">
                            Bienvenido, {{Auth::user()->name}}
                        </p>
                        <a href="{{route('actualizado', Auth::user()->id)}}" role="menuitem"
                            class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-blue-600">
                            Configuraciones
                        </a>
                        <a href="{{ route('logout') }}" role="menuitem"
                            class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-blue-600">
                            Cerrar Sesión
                        </a>
                    </div>
                        @else
                        <a href="{{ route('login.index') }}" type="button" class="absolute right-0  origin-top-right dark:bg-slate-800 dark:border-gray-700 dark:text-white inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Ingresar</a>
                    @endif
                </div>

            </nav>
        </div>
        <!-- Mobile main manu -->
        <div class="border-b md:hidden dark:border-blue-800" x-show="isMobileMainMenuOpen"
            @click.away="isMobileMainMenuOpen = false">
            <nav aria-label="Main" class="px-2 py-4 space-y-2">
                <!-- Dashboards links -->
                <div x-data="{ isActive: false, open: false }">
                    <!-- active & hover classes 'bg-blue-100 dark:bg-blue-600' -->
                    <a href="#" @click="$event.preventDefault(); open = !open"
                        class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-blue-100 dark:hover:bg-blue-600"
                        :class="{ 'bg-blue-100 dark:bg-blue-600': isActive || open }" role="button"
                        aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                        <span aria-hidden="true">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </span>
                        <span class="ml-2 text-sm"> Dashboard </span>
                        <span class="ml-auto" aria-hidden="true">
                            <!-- active class 'rotate-180' -->
                            <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </a>

                    {{-- Menus Movil --}}
                    <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" aria-label="Dashboards">
                        <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                        <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                        <a href="{{ route('formulario') }}" role="menuitem"
                            class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                            Formulario Caracterización
                        </a>
                        <a href="{{ route('listado') }}" role="menuitem"
                            class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                            Usuarios Caracterizados
                        </a>
                        <a href="{{ route('usuario.remitidos') }}" role="menuitem"
                            class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                            Usuarios en Remisión
                        </a>
                    </div>


                </div>
            </nav>
        </div>


    </header>
    <!-- Navbar -->
