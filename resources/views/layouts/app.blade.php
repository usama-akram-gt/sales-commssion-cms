<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta content="zaratedev" name="author" />
    <meta content="desarrollador web y móvil" name="description" />
    <meta content="laravel, vue, crud, bootstrap 4" name="keywords" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    @yield( 'css' )
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
    <!-- Scripts -->
    @yield( 'js' )
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
