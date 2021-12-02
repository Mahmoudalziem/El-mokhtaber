<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="description" content="Hello El-Mokhtaber" />
    <meta name="author" content="Mahmoud Abd Alziem" />
    <link rel="icon" href="/img/logo.png">
    <link rel="stylesheet" href="/css/app.css" />
    @yield('meta_tags')
    @yield('links')
</head>

<body>
    @yield('content')
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/js/app.js"></script>

    @yield('scripts')
</body>

</html>
