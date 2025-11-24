@extends('layouts.app') {{-- ou ton layout principal --}}

@section('title', $title)

@section('content')
<main>
    <div class="container mainContent">
        <div class="row">

            <div class="my-5">
                <h1 class="text-center text-muted my-5">{{ $title }}</h1>
            </div>

            <div class="col-md-8 my-5">
                <div class="box rounded-5 p-5">

                    <p class="text-muted text-center mb-3"><strong>Dernière mise à jour :</strong> 17/03/2025</p>

                    <article class="my-4">
                        <h2 class="my-3">Qu’est-ce qu’un cookie ?</h2>
                        <p class="text-muted">
                            Un cookie est un petit fichier texte stocké sur votre appareil. Il mémorise certaines informations sur l'utilisateur, par exemple :
                        </p>
                        <ul class="text-muted my-3">
                            <li class="mx-4">1. Préférences utilisateur : thème, langue, etc.</li>
                            <li class="mx-4">2. Identifiants de connexion pour éviter de se reconnecter à chaque visite</li>
                            <li class="mx-4">3. Panier d'achat sur un site e-commerce</li>
                            <li class="mx-4">4. Comportement de navigation</li>
                        </ul>
                    </article>

                    <article class="my-4">
                        <h2 class="my-3">Quels types de cookies utilisons-nous ?</h2>

                        <h3 class="text-center my-4">Les cookies analytiques</h3>
                        <p class="text-muted">
                            Ils nous aident à comprendre comment les visiteurs interagissent avec notre site. Ils collectent des données sur :
                        </p>
                        <ul class="text-muted my-3">
                            <li class="mx-4">1. Le nombre de visites et les pages consultées</li>
                            <li class="mx-4">2. La durée de navigation sur le site</li>
                            <li class="mx-4">3. Les sources du trafic (moteurs de recherche, réseaux sociaux, etc.)</li>
                        </ul>
                        <p class="text-muted">
                            Ces informations nous permettent d'améliorer nos contenus et l'expérience utilisateur.
                        </p>

                        <h3 class="text-center my-4">Les cookies marketing</h3>
                        <p class="text-muted">
                            Ces cookies servent à personnaliser les publicités affichées sur notre site et ailleurs. Ils permettent :
                        </p>
                        <ul class="text-muted my-3">
                            <li class="mx-4">1. D'afficher des publicités selon vos centres d'intérêts</li>
                            <li class="mx-4">2. De limiter le nombre d'affichages d'une publicité</li>
                            <li class="mx-4">3. De mesurer l'efficacité des campagnes publicitaires</li>
                        </ul>
                        <p class="text-muted">
                            Vous pouvez <strong>accepter ou refuser</strong> ces cookies via notre bannière de gestion des préférences.
                        </p>
                    </article>

                    <article>
                        <h2 class="my-3">Comment gérer vos préférences ?</h2>
                        <p class="text-muted">Modifiez vos préférences en cliquant ci-dessous :</p>
                        <div class="text-center my-4">
                            <a href="{{ route('cookies.preferences.show') }}" class="button">Gérer vos préférences</a>
                        </div>
                    </article>

                    <article>
                        <h2 class="my-3">Durée de conservation des cookies</h2>
                        <p class="text-muted">Nous conservons vos préférences pendant <strong>13 mois</strong>.</p>

                        <h2 class="my-3">Contact</h2>
                        <p class="text-muted">Pour toute question, contactez-moi :</p>
                        <div class="text-center my-4">
                            <a href="{{ url('/contact') }}" class="button">Contactez-moi</a>
                        </div>
                    </article>

                </div>
            </div>

            <div class="col-md-4 position">
                <img src="{{ asset('assets/img/img/cookies.jpg') }}"
                     class="img-fluid rounded-5 cookie-image"
                     alt="Photo représentant une pile de cookies">
            </div>

        </div>
    </div>
</main>
@endsection
