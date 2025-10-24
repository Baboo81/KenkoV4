<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description"
            content=" {{ $homeData['metaDesc']  ?? '' }}">
        <meta name="keywords"
            content=" {{ $homeData['metaKeyWords']  ?? '' }}">
        <!--Favicon links-->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/logo/logoKenko2.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/logo/logoKenko2.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/logo/logoKenko2.png') }}">
        <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('assets/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <!-- Token CSRF pour Laravel + JS-->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Klaro CSS (CDN) -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/klaro@0.7.22/dist/klaro.css" />
        <!-- CSS : Leaflet.js -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
            integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
            crossorigin="" />
        <!-- Bootstrap Icons CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <!-- css global -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/kenko-web.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/kenko-ho.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/quiSuisJe.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/faq.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/themes/dix-huiles.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/themes/emotions.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/themes/cuisine.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/themes/enfants.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/themes/peau.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/themes/sommeil.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/themes/microbiome.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/themes/douleurs.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/themes/reiki.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/themes/bases.css') }}">
        <!-- css nav -->
        <link rel="stylesheet" href="{{ asset('assets/css/nav.css') }}">
        <!-- css footer -->
        <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
        <!-- Klaro JS (CDN) -->
        <script src="https://cdn.jsdelivr.net/npm/klaro@0.7.22/dist/klaro.js" defer></script>
        <!--Script Leaflet-->
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>
        <!--Scripts, libraries, framework JS-->
        <!-- Bootstrap JS Bundle avec Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
        <script src="https://unpkg.com/lucide@latest" defer></script>
        <!-- Scripts : Klaro, Google Tag Manager -->
        <script src="{{ asset('assets/js/gtm.js') }}" defer></script>
        <script src="{{ asset('assets/js/klaro-gtm.js') }}" defer></script>
        <script src="{{ asset('assets/js/main.js') }}" defer></script>

        <title>{{ $homeData['pageTitle'] ?? '' }}</title>
