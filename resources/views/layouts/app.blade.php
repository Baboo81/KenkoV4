<!DOCTYPE html>
<html lang="fr">
    <head>
        @include('partials.header')
    </head>
    <body>
        <!-- Conteneur pour Klaro (bannière modal) -->
        <div id="Klaro"></div>

        <header>
            @include('partials.nav')
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            @include('partials.footer')
        </footer>
    </body>
</html>
