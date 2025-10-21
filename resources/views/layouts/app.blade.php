<!DOCTYPE html>
<html lang="fr">
    <head>
        @include('partials.header')
        @yield('styles')
    </head>
    <body class="font-sans antialiased">
        {{-- Navigation --}}
        <header>
            @include('partials.navigation')
        </header>

        {{-- Contenu principal --}}
        <main>
            @yield('content')
        </main>
        {{-- Footer --}}
        <footer>
            @include('partials.footer')
        </footer>
        {{-- Scripts supplémentaires --}}
        @yield('scripts')
    </body>
</html>
