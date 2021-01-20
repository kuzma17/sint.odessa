<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon.ico">
    <link rel="icon" type="image/png" href="/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" media="screen, print">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    @include('lang')
    <div class="wrapper " id="app">
        @yield('content_page')
    </div>
</body>
</html>
