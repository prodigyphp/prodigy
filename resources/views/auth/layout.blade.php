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
<body class="pro-relative pro-h-full pro-bg-gradient-to-bl pro-from-blue-600 pro-to-blue-400">
<div class="pro-fixed pro-inset-0">
        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" class="pro-h-full pro-w-full" preserveAspectRatio="none" x="0" y="0" style="enable-background:new 0 0 573 322" version="1.1" viewBox="0 0 573 322"><style>.st0{opacity:.2;fill:none;stroke:#fff;stroke-width:.5;stroke-miterlimit:10}</style><path d="m171.2-8.5 96 342M180-8.5l96 342M163.6-8.5l96 342M624.8 102.3l-660.6 242M624.8 67.3l-660.6 242M624.8 32.3l-660.6 242M403.8-14.1l-96 342M395-14.1l-96 342M411.4-14.1l-96 342M-33 109l660.6 242M-33 74l660.6 242M-33 38l660.6 242" class="st0"/></svg>
    </div>
<div class="pro-w-full pro-h-full pro-flex pro-items-center pro-justify-center pro-z-[20] pro-relative">
    @yield('content')
</div>

</body>
</html>
