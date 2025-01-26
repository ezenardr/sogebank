<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Sogebank')</title>
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-r from-[#2754C8] to-[#110F72] h-dvh overflow-hidden flex items-center justify-center">
<main class=" bg-white max-h-[90dvh] overflow-y-scroll flex flex-col gap-8  pb-8 px-12 rounded-[24px] items-center justify-center">
    <img src="{{'/assets/images/logo-wide.jpg'}}" width="183" class="pt-32" alt="Logo sogebank wide"/>
    {{$slot}}
</main>
</body>
</html>
