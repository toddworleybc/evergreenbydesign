<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-X3RK870BQE"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-X3RK870BQE');
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:image" content="https://evergreenbydesign.com/media/images/png/main-img.png" />
        <meta property="og:image:secure_url" content="https://secure.evergreenbydesign.com/media/images/png/main-img.png" />
        <meta property="og:url" content="https://evergreenbydesign.com/media/images/png/main-img.png" />
        <meta property="og:title" content="Evergreen By Design - Website Design and Management Services" />
    
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="2182" />
        <meta property="og:image:height" content="1080" />
        <meta property="og:image:alt" content="evergreen by design website design and management services" />

        

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
