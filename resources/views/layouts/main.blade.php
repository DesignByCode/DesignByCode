<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/css/prism.css', 'resources/ts/app.ts'])
</head>
<body class="font-sans text-gray-700 dark:text-gray-300 bg-primary-100 dark:bg-gray-950 antialiased overflow-x-clip">

<x-navigation/>
<x-pattern.grid @class(['h-[500px] mask-image-b', 'opacity-20 h-[300px]' => !request()->is("/")])/>



<main id="main" class="relative z-10">
    {{ $slot }}
</main>
<x-footer/>
</body>
</html>
