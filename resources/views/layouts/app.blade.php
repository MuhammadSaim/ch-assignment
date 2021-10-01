<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    @yield('stylescheets')
    <title>@yield('title', 'Home')</title>
</head>
<body class="bg-gray-200">

    @include('includes.navbar')


    @yield('content')


    <script src="{{ asset('assets/js/app.js') }}"></script>
    @yield('javascripts')
</body>
</html>