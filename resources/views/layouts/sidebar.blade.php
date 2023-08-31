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
        <header class="flex w-full items-center justify-between border-b-2 border-gray-200 bg-white p-2">
            <!-- logo -->
            <div class="flex items-center space-x-2">
                <button type="button" class="text-3xl"><i class="bx bx-menu"></i></button>
                <div>Formulario</div>
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

    <script src="{{ asset('js/validate-checkbox.js') }}"></script>

</html>
