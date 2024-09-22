<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Nueva Jerusalen') }}</title>

    <!-- Styles -->
    <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Main Header -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- ... -->
        </nav>

        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar content here -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>
</html>
