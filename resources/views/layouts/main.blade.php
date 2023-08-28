<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @production
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer', "{{ config('apikeys.google.tagmanager') }}");</script>
        <!-- End Google Tag Manager -->
    @endproduction

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800,900&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/css/prism.css', 'resources/ts/app.ts'])
</head>
<body class="font-sans text-gray-700 dark:text-gray-300 bg-primary-100 dark:bg-gray-950 antialiased overflow-x-clip">
<!-- Google Tag Manager (noscript) -->
@production
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id={{ config('apikeys.google.tagmanager') }}" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
@endproduction

<!-- End Google Tag Manager (noscript) -->
<x-navigation/>
<x-pattern.grid @class(['h-[500px] mask-image-b', 'opacity-10 h-[200px]' => !request()->is("/")])/>
<main id="main" class="relative z-10">
    {{ $slot }}
</main>
<x-footer/>
<x-main.scroll-to-top/>
</body>
</html>
