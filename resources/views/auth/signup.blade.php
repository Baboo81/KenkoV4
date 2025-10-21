@extends('layouts.app')

@section('content')
    <section class="signup">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <h1 class="text-center text-muted my-5">Inscription</h1>
                <div class="col-md-12 my-5">
                    <form class="rounded-5 p-5 d-flex align-center justify-items-center" action="/signup" method="post"
                        autocomplete="off">
                        @csrf
                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <img src="/assets/img/form/signup.svg" alt="Illustration contact" class="img-fluid w-100"
                                style="object-fit:cover;">
                        </div>
                        <div class="col-md-6 col-12 my-5">
                            <section class="my-5">
                                <div class="mb-4">
                                    <label for="username" class="form-label mb-3">Nom d'utilisateur :</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                                        <input type="text" class="form-control" id="username" name="username"
                                            autocomplete="off" placeholder="Veuillez indiquer votre nom" required>
                                    </div>
                                    @error('name')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label mb-3">Mot de passe :</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                        <input type="password" class="form-control" id="password" name="password"
                                            autocomplete="off" placeholder="Veuillez indiquer votre mot de passe" required>
                                    </div>
                                    @error('password')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="password_confirmation" class="form-label mb-3">Confirmer le mot de passe
                                        :</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                        <input type="password" class="form-control" id="password_confirmation"
                                            name="password_confirmation" autocomplete="off"
                                            placeholder="Confirmez votre mot de passe" required>
                                    </div>
                                    @error('password_confirmation')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="email" class="form-label mb-3">Email :</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                        <input type="email" class="form-control" id="email" name="email"
                                            autocomplete="off" placeholder="Veuillez indiquer votre adresse mail" required>
                                    </div>
                                    @error('email')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="button">S'inscrire</button>
                                </div>
                            </section>
                        </div>
                    </form>
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
