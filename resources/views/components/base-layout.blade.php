<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Koningsdag voorspellen') }}</title>

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background: url('{{ asset('storage/background.png') }}') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>

<body class="min-h-screen bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        {{ $slot }}
    </div>
</body>

</html>
