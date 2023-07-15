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
        
        <link rel="icon" type="image/svg" href="media/images/svg/ebd-logo-rounded.svg">

        <title inertia>{{ config('app.name', 'Evergreen By Design') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/ebd-fonts.css') }}" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead

          <!-- Facebook Meta Tags -->
        <meta property="og:url" content="https://www.evergreenbydesign.com/">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Evergreen By Design - Website Design and Management Services">
        <meta property="og:description" content="Evergreen By design provides both website design and FULL ongoing website management. Get your website services started today!">
        <meta property="og:image" content="https://evergreenbydesign.com/media/images/png/main-img.png">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="evergreenbydesign.com">
        <meta property="twitter:url" content="https://www.evergreenbydesign.com/">
        <meta name="twitter:title" content="Evergreen By Design - Website Design and Management Services">
        <meta name="twitter:description" content="Evergreen By design provides both website design and FULL ongoing website management. Get your website services started today!">
        <meta name="twitter:image" content="https://evergreenbydesign.com/media/images/png/main-img.png">

        <!-- Meta Tags Generated via https://www.opengraph.xyz -->

        <!-- Meta Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '658906829085901');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=658906829085901&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Meta Pixel Code -->
        
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
