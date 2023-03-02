<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property='og:title' content='altohami' />
    <meta property='og:image' content='https://i.ibb.co/GvBq6Hx/image.png' />
    <meta property='og:description' content='Mohammed Altohami Back-end Developer' />
    <meta property='og:url' content='URL OF YOUR WEBSITE' />
    <meta property='og:image:width' content='500' />
    <meta property='og:image:height' content='600' />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: 'Ubuntu Mono', monospace;
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-900 p-5">
    @yield('content')
</body>

</html>
