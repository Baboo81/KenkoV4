@php
    use Illuminate\Support\Facades\Route;
    $currentRoute = Route::currentRouteName();
    $kenkoAccess = session('kenko_access', false); // Vérifie si l'utilisateur a déjà accès
@endphp

<header>
    <div class="container">
        <div class="row my-5">
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container-fluid d-flex align-items-center justify-content-between">
                    <!-- Logo -->
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="/assets/img/logo/logo.svg" alt="Logo du site" id="logo">
                    </a>

                    <!-- Bouton mobile -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Menu principal -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link {{ $currentRoute == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
                                    Accueil
                                </a>
                            </li>

                            <li class="nav-item">
                                @if($kenkoAccess)
                                    <!-- Lien direct si accès validé -->
                                    <a class="nav-link {{ $currentRoute == 'kenko-ho' ? 'active' : '' }}" href="{{ route('kenko-ho') }}">
                                        Kenko-Ho
                                    </a>
                                @else
                                    <!-- Sinon, ouvre la modal -->
                                    <a class="nav-link {{ $currentRoute == 'kenko-ho' ? 'active' : '' }}" href="#"
                                        data-bs-toggle="modal" data-bs-target="#kenkoHoModal">
                                        Kenko-Ho
                                    </a>
                                @endif
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ $currentRoute == 'kenko-web' ? 'active' : '' }}" href="{{ route('kenko-web') }}">
                                    Kenko-Web
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ $currentRoute == 'qui-suis-je' ? 'active' : '' }}" href="{{ route('qui-suis-je') }}">
                                    Qui suis-je ?
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ $currentRoute == 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">
                                    Contact
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ $currentRoute == 'faq' ? 'active' : '' }}" href="{{ route('faq') }}">
                                    FAQ
                                </a>
                            </li>
                        </ul>

                        <!-- Menu utilisateur -->
                        <ul class="navbar-nav">
                            @auth
                                <li class="nav-item dropdown p-2">
                                    <a href="#" id="userMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        @if (Auth::user()->avatar)
                                            <img src="{{ asset(Auth::user()->avatar) }}" alt="Avatar" class="avatar" width="50" style="object-fit: cover;">
                                        @else
                                            <img src="/assets/img/nav/user-icon.svg" alt="Img user" class="rounded-circle" width="50">
                                        @endif
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end rounded-5 p-3" aria-labelledby="userMenu">
                                        <p class="fs-5 text-muted my-3 text-center">Compte utilisateur</p>
                                        <li>
                                            <a class="dropdown-item {{ $currentRoute == 'settings.edit' ? 'active' : '' }}" href="{{ route('settings.edit') }}">
                                                <i class="bi bi-gear"></i>&nbsp;Paramètres
                                            </a>
                                        </li>
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" class="dropdown-item btn-logout">
                                                    <i class="bi bi-box-arrow-right"></i>&nbsp;Se déconnecter
                                                </button>
                                            </form>
                                        </li>
                                        <li class="dropdown-item">
                                            <i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
                                        </li>
                                    </ul>
                                </li>
                            @endauth

                            @guest
                                <li class="nav-item">
                                    <a class="nav-link {{ $currentRoute == 'signup.show' ? 'active' : '' }}" href="{{ route('signup.show') }}">
                                        S'inscrire
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ $currentRoute == 'login' ? 'active' : '' }}" href="{{ route('login') }}">
                                        Se connecter
                                    </a>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>

<!-- Modale Kenko-Ho -->
@if(!$kenkoAccess)
<div class="modal fade" id="kenkoHoModal" tabindex="-1" aria-labelledby="kenkoHoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kenkoHoModalLabel">Accès réservé</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-muted">Espace réservé aux clients dōTERRA. Pour plus d’infos, contactez-moi via le formulaire de contact ou par téléphone.</p>
                <p class="text-muted">Si vous possédez un code d'accès, veuillez l'introduire ci-dessous :</p>
                <div class="my-3">
                    <input type="password" id="accessCode" class="form-control" placeholder="Entrez le code ici">
                    <button class="btn btn-outline-secondary my-3" type="button" onclick="togglePassword()">
                        <i id="eyeIcon" class="bi bi-eye"></i>
                    </button>
                    <p id="error-message" class="text-danger mt-2" style="display: none;">❌ Code incorrect</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="button" data-bs-dismiss="modal">Fermer</button>
                <button type="button" class="button" onclick="checkAccess()">Valider</button>
            </div>
        </div>
    </div>
</div>
@endif

@if(session('showKenkoModal'))
<script>
document.addEventListener("DOMContentLoaded", function() {
    var kenkoModal = new bootstrap.Modal(document.getElementById('kenkoHoModal'));
    kenkoModal.show();
});
</script>
@endif

<script>
    function togglePassword() {
        let input = document.getElementById("accessCode");
        let eyeIcon = document.getElementById("eyeIcon");

        if (input.type === "password") {
            input.type = "text";
            eyeIcon.classList.remove("bi-eye");
            eyeIcon.classList.add("bi-eye-slash");
        } else {
            input.type = "password";
            eyeIcon.classList.remove("bi-eye-slash");
            eyeIcon.classList.add("bi-eye");
        }
    }

    function checkAccess() {
        let codeSaisi = document.getElementById("accessCode").value;
        let messageErreur = document.getElementById("error-message");

        fetch("{{ route('check-access') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
            },
            body: "code=" + encodeURIComponent(codeSaisi),
            credentials: "same-origin"
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                window.location.href = "{{ route('kenko-ho') }}";
            } else {
                messageErreur.style.display = "block";
            }
        })
        .catch(error => {
            console.error("Erreur :", error);
            messageErreur.style.display = "block";
        });
    }

    window.checkAccess = checkAccess;
</script>
