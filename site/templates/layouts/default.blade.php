<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $site->title() }} | {{ $page->title() }}</title>
    @if($page->meta_keywords()->isNotEmpty())
    <meta name="keywords" content="{{ $page->meta_keywords() }}">
    @endif

    @if ($ogImage = $page->og_image()->toFile())
    <meta property="og:image" content="{{ $ogImage->url() }}" />
    @endif

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="{{ $site->url() }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $site->meta_title() }}">
    <meta property="og:description" content="{{ $site->description() }}">
    @if ($ogImage = $page->og_image()->toFile())
    <meta property="og:image" content="{{ $ogImage->url() }}" />
    @endif

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="mutantsftn.com">
    <meta property="twitter:url" content="{{ $site->url() }}">
    <meta name="twitter:title" content="{{ $site->title() }}">
    <meta name="twitter:description" content="{{ $site->description() }}">
    @if ($ogImage = $page->og_image()->toFile())
    <meta property="og:image" content="{{ $ogImage->url() }}" />
    @endif

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="manifest" href="/images/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/52e94d949e861f8484bfb608f/1ddfb8d95389bbb382e5c2ef7.js");</script>
    <!--- analytics -->
    {!! $site->analytics() !!}

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11305153512"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-11305153512');
    </script>
    @include('partials.data')
</head>

<body>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    @include('partials.gtranslate')
    @include('partials.whatsapp')
    <div class="z-50">
        <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/47268764.js"></script>
    </div>
</body>

</html>