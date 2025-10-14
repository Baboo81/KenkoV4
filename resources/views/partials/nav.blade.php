@php
    use Illuminate\Support\Facades\Route;
    $currentRoute = Route::currentRouteName();
@endphp

<header>
    <div class="container">
        <div class="row my-5">
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container-fluid d-flex align-items-center justify-content-between">
                    <!-- Logo -->
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="/assets/img/logo/logoKenko2.png" alt="Logo du site" id="logo">
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
                                <a class="nav-link {{ $currentRoute == 'home' ? 'active' : '' }}" href="{{ route('home') }}">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ $currentRoute == 'kenko-ho' ? 'active' : '' }}" href="#" data-bs-toggle="modal" data-bs-target="#kenkoHoModal">Kenko-Ho</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ $currentRoute == 'kenko-web' ? 'active' : '' }}" href="{{ route('kenko-web') }}">Kenko-Web</a>
                            </li>
                            <li class="nav-item">
                                {{--<a class="nav-link {{ $currentRoute == 'quiSuis-je' ? 'active' : '' }}" href="{{ route('quiSuis-je') }}">Qui suis-je ?</a>--}}
                            </li>
                            <li class="nav-item">
                                {{--<a class="nav-link {{ $currentRoute == 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>--}}
                            </li>
                        </ul>

                        <!-- Menu utilisateur -->
                        <ul class="navbar-nav">
                            @unless(isset($_SESSION['user']))
                                <li class="nav-item">
                                    {{--<a class="nav-link {{ $currentRoute == 'signup' ? 'active' : '' }}" href="{{ route('signup') }}">S'inscrire</a>--}}
                                </li>
                                <li class="nav-item">
                                    {{--<a class="nav-link {{ $currentRoute == 'foireAuxQuestions' ? 'active' : '' }}" href="{{ route('foireAuxQuestions') }}">FAQ</a>--}}
                                </li>
                            @endunless

                            <li class="nav-item dropdown">
                                <a href="#" id="userMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="/assets/img/icons/user-icon.svg" alt="Img user" class="rounded-circle" width="50">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3" aria-labelledby="userMenu">
                                    <p class="fs-5 text-muted my-3 text-center">Compte utilisateur</p>
                                    <li>
                                        <a class="dropdown-item" href="/settings">
                                            <i class="bi bi-gear"></i>&nbsp;Paramètres
                                        </a>
                                    </li>

                                    @unless(isset($_SESSION['user']))
                                        <li>
                                            <a class="dropdown-item" href="/login">
                                                <i class="bi bi-box-arrow-in-right"></i>&nbsp;Se connecter
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <a class="dropdown-item" href="/logout">
                                                <i class="bi bi-box-arrow-right"></i>&nbsp;Se déconnecter
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <i class="bi bi-person-circle"></i> {{ $_SESSION['user'] }}
                                        </li>
                                    @endunless
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>

<!-- Modale Kenko-Ho -->
<!--<div class="modal fade" id="kenkoHoModal" tabindex="-1" aria-labelledby="kenkoHoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kenkoHoModalLabel">Accès réservé</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-muted">Espace réservé aux clients dōTERRA. Pour plus d’infos, contactez-moi via le formulaire de contact sur la page : contact ou par téléphone</p>
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
</div>-->

<script>
    // Afficher/masquer le mot de passe
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

    // Vérifier le code avec PHP
    //function checkAccess() {
      //  let codeSaisi = document.getElementById("accessCode").value;
        //let messageErreur = document.getElementById("error-message");

        //fetch("check_access.php", {
           // method: "POST",
           // headers: { "Content-Type": "application/x-www-form-urlencoded" },
            //body: "code=" + encodeURIComponent(codeSaisi)
        //})
        //.then(response => response.text())
        //.then(data => {
          //  if (data === "success") {
            //    window.location.href = "kenko-ho";
            //} else {
              //  messageErreur.style.display = "block";
            //}
        //});
    //}
</script>
