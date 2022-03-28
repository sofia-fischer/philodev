<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-black">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="Sofia Fischer, Full Stack Code Wizard, Web and App Developer, and Agile Ethusiast"/>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
<div class="bg-black h-full">
    <div id="root">
        <div>
            @include('layouts.navigation')
        </div>

        <div class="main w-full h-screen overflow-y-scroll">
            {{ $slot }}
        </div>
    </div>
</div>

</body>
</html>
