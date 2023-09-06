<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <link href="{{ asset('css/wizard.css') }}" rel="stylesheet" id="bootstrap-css">

  @vite('resources/css/app.css')
</head>
<body>
    <main class="min-h-screen w-full bg-gray-100 text-gray-700" >
        <!-- header page -->
        <section class="shadow-lg font-poppins ">
            <div class="max-w-6xl px-4 mx-auto" x-data="{open:false}">
                <nav class="flex items-center justify-between py-4">
                    <div class="flex lg:hidden">
                        <button
                            class="flex items-center px-3 py-2 text-blue-600 border border-blue-200 rounded  hover:text-blue-800 hover:border-blue-300 lg:hidden"
                            @click="open =true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </button>
                    </div>
                    <ul class="hidden lg:w-auto lg:space-x-12 lg:items-center lg:flex ">
                        <li><a href="{{route('formulario')}}" class="text-sm text-gray-700 hover:text-blue-700  dark:hover:text-blue-500">Formulario</a>
                        </li>
                        <li><a href="{{route('listado')}}" class="text-sm text-gray-700 hover:text-blue-700  dark:hover:text-blue-500">Listado</a>
                    </ul>
                </nav>
                <!-- Mobile Sidebar -->
                <div class="fixed inset-0 w-full bg-gray-800 opacity-25 dark:bg-gray-400 lg:hidden"
                    :class="{'translate-x-0 ease-in-opacity-100' :open===true, '-translate-x-full ease-out opacity-0' : open===false}">
                </div>

                <div class="absolute inset-0 z-10 h-screen p-3 text-gray-700 duration-500 transform shadow-md  bg-blue-50 w-80 lg:hidden lg:transform-none lg:relative"
                    :class="{'translate-x-0 ease-in-opacity-100' :open===true, '-translate-x-full ease-out opacity-0' : open===false}">
                    <div class="flex justify-between px-5 py-2">
                        <button class="rounded-md hover:text-blue-300 lg:hidden " @click="open=false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-x-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </button>
                    </div>

                    <ul class="px-5 text-left mt-7">
                        <li class="pb-3">
                            <a href="{{route('formulario')}}" class="text-sm text-gray-700 hover:text-blue-400 ">Formulario</a>
                        </li>
                        <li class="pb-3">
                            <a href="{{route('listado')}}" class="text-sm text-gray-700 hover:text-blue-400 ">Listado</a>
                        </li>
                    </ul>

                </div>
            </div>
        </section>

        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <div class="flex">


            <!-- main content page -->

            <div class="w-full  sm:px-6 lg:px-8 mt-8">
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

    <script src="{{ asset('js/validate-checkbox.js') }}"></script>

</html>
