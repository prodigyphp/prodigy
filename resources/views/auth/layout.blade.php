<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="pro-h-full pro-font-sans pro-antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, viewport-fit=cover, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('seotitle')</title>

    <!-- Styles -->
{{--    <link rel="stylesheet" href="/vendor/prodigy/prodigy.css">--}}

    @yield('head')

</head>
<body class="pro-h-full pro-bg-gray-200">

<div class="pro-w-full pro-h-full pro-flex pro-items-center pro-justify-center">
    @yield('content')
</div>

</body>
</html>
