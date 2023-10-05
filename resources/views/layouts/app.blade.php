
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
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

  <link href="{{ asset('css/style.css') }}" rel="stylesheet" id="bootstrap-css">
  <link href="{{ asset('css/modal.css') }}" rel="stylesheet" id="bootstrap-css">
  <link href="{{ asset('css/datatables-style.css') }}" rel="stylesheet" id="bootstrap-css">
  <link href="{{ asset('css/login.css') }}" rel="stylesheet" id="bootstrap-css">

  <livewire:styles>

  @vite('resources/css/app.css')


</head>
<body>
    @yield('content')

</body>


</html>
