<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="shortcut icon" href="{{asset('logos/favicon.png')}}" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-cover bg-no-repeat" style="background-image: url('{{ asset('assets/images/bg.jpg') }}');">
{{--        <div class="flex items-center min-h-screen p-6 bg-gray-50" style="background:#fff url({{asset('assets/images/bg.jpg')}}); height: 100vh;">--}}
        <div class="flex items-center min-h-screen p-6 bg-gray-50">
            <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
