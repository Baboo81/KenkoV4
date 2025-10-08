<?php
    $currentPage = basename($_SERVER['PHP_SELF'], ".php"); //Récupère le nom de la page sans l'extension .php
?>

 <!-- Header -->
        <header>
            <div class="container">
                <div class="row my-5">
                    <nav class="navbar navbar-expand-lg fixed-top <?= !isset($_COOKIE['cookie-preferences']) ? 'disabled-navbar' : '' ?>"<?= !isset($_COOKIE['cookie-preferences']) ? 'title="Veuillez accepter les cookies pour utiliser la navigation."' : '' ?>>
                        <div class="container-fluid d-flex align-items-center justify-content-between">
                            <!--  Logo  -->
                            <a class="navbar-brand" href="/">
                                <img src="/assets/img/logo/logoKenko.png" alt="Logo du site" id="logo">
                            </a>
                            <!--  Btn pour mobile -->
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Menu principal -->
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mx-auto">
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($currentPage == '' || $currentPage == 'index') ? 'active' : '' ?>"  href="/">Accueil</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($currentPage == 'kenko-ho') ? 'active' : '' ?>"  href="/kenko-ho" data-bs-toggle="modal" data-bs-target="#kenkoHoModal">Kenko-Ho</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($currentPage == 'kenko-web') ? 'active' : '' ?>" href="/kenko-web">Kenko-Web</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($currentPage == 'quiSuis-je') ? 'active' : '' ?>" aria-current="page" href="/quiSuis-je">Qui suis-je ?</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?= ($currentPage == 'contact') ? 'active' : '' ?>" aria-current="page" href="/contact">Contact</a>
                                    </li>
                                </ul>
                                <!-- Menu utilisateur -->
                                    <ul class="navbar-nav">
                                        <?php if (!isset($_SESSION['user'])): ?>
                                            <li class="nav-item">
                                                <a class="nav-link <?= ($currentPage == 'signup') ? 'active' : '' ?>" href="/signup">S'inscrire</a>
                                            </li>
                                        <?php endif; ?>
                                        <li class="nav-item">
                                            <a class="nav-link <?= ($currentPage == 'foireAuxQuestions') ? 'active' : '' ?>" aria-current="page" href="/foireAuxQuestions">FAQ</a>
                                        </li>
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
                                                <?php if (!isset($_SESSION['user'])): ?>
                                                    <li>
                                                        <a class="dropdown-item" href="/login">
                                                            <i class="bi bi-box-arrow-in-right"></i>&nbsp;Se connecter
                                                        </a>
                                                    </li>
                                                <?php else: ?>
                                                    <li>
                                                        <a class="dropdown-item" href="/logout">
                                                            <i class="bi bi-box-arrow-right"></i>&nbsp;Se déconnecter
                                                        </a>
                                                    </li>
                                                    <!-- Afficher le nom du user connecté  -->
                                                    <li class="dropdown-item">
                                                        <i class="bi bi-person-circle"></i><a class="user-name mx-2"><?= $_SESSION['user'] ?></a>
                                                    </li>
                                                <?php endif; ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
            <!-- Modale Bootstrap -->
            <div class="modal fade" id="kenkoHoModal" tabindex="-1" aria-labelledby="kenkoHoModalLabel" aria-hidden="true">
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
            </div>

            <script>
                // Fonction pour afficher/masquer le code
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
                function checkAccess() {
                    let codeSaisi = document.getElementById("accessCode").value;
                    let messageErreur = document.getElementById("error-message");

                    fetch("check_access.php", {
                        method: "POST",
                        headers: { "Content-Type": "application/x-www-form-urlencoded" },
                        body: "code=" + encodeURIComponent(codeSaisi)
                    })
                    .then(response => response.text())
                    .then(data => {
                        if (data === "success") {
                            window.location.href = "kenko-ho"; // Redirection si OK
                        } else {
                            messageErreur.style.display = "block"; // Afficher erreur si code faux
                        }
                    });
                }
            </script>
