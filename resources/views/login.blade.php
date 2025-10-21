@extends('layouts.guest')

@section('content')
<section class="mainSection">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <h1 class="text-center text-muted mb-5">Login</h1>
            <div class="col-md-12 my-5">

                <!-- Message de statut (par ex. après un reset de mot de passe) -->
                @if (session('status'))
                    <div class="alert alert-success text-center mb-4">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="rounded-5 p-5 d-flex align-center justify-items-center"
                      method="POST"
                      action="{{ route('login') }}">
                    @csrf

                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <img src="/assets/img/form/login.svg"
                             alt="Illustration contact"
                             class="img-fluid w-100"
                             style="object-fit:cover;">
                    </div>

                    <div class="col-md-6 col-12 my-5">
                        <section class="my-5">

                            <!-- Champ email -->
                            <div class="mb-3">
                                <label for="email" class="form-label mb-3">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           id="email"
                                           name="email"
                                           value="{{ old('email') }}"
                                           placeholder="Votre adresse email"
                                           required autofocus>
                                </div>
                                @error('email')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Champ mot de passe -->
                            <div class="mb-5">
                                <label for="password" class="form-label mb-3">Mot de passe</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                    <input type="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           id="password"
                                           name="password"
                                           placeholder="Mot de passe"
                                           required>
                                </div>
                                @error('password')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Case à cocher 'Se souvenir de moi' -->
                            <div class="form-check mb-4">
                                <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                                <label class="form-check-label" for="remember_me">Se souvenir de moi</label>
                            </div>

                            <!-- Bouton de connexion -->
                            <div class="text-center">
                                <button type="submit" class="button">Se connecter</button>
                            </div>

                            <!-- Lien mot de passe oublié -->
                            <div class="my-5 text-center">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-muted">Mot de passe oublié ?</a>
                                @endif
                            </div>
                        </section>
                    </div>
                </form>

                <!-- Bouton retour -->
                <div class="text-center my-5">
                    <a href="/">
                        <button class="button">Retour vers la page d'accueil</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
