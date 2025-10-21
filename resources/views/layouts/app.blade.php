<<!DOCTYPE html>
<html lang="fr">
<head>
    @include('partials.header') {{-- Ton header avec meta, CSS, etc. --}}
    @yield('styles')           {{-- Pour ajouter du CSS spécifique à certaines pages --}}
</head>
<body class="font-sans antialiased">
    {{-- Navigation --}}
    <header>
        @include('partials.navigation') {{-- On inclut ton nav adapté à Breeze --}}
    </header>

    {{-- Contenu principal --}}
    <main>
        @yield('content')
    </main>

    {{-- Scripts supplémentaires --}}
    @yield('scripts')
</body>
</html>
