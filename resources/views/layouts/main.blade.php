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
<x-pattern.grid @class(['h-[500px] mask-image-b', 'opacity-10 h-[200px]' => !request()->is("/")])/>



<main id="main" class="relative z-10">
    {{ $slot }}
</main>
<x-footer/>

<div class="fixed bottom-20 inset-x-0 z-[1001] pointer-events-none">
    <div class="wrapper relative">
        <button hidden class="absolute right-4 pointer-events-auto md:-right-14 h-12 w-12 flex items-center justify-center rounded-lg border border-gray-700 bg-primary-500 text-white" is="headless-scrolltop">
            <span class="sr-only"> Scroll to top</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6 pointer-events-none">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 9l6-6m0 0l6 6m-6-6v12a6 6 0 01-12 0v-3"/>
            </svg>
        </button>
    </div>
</div>
</body>
</html>
