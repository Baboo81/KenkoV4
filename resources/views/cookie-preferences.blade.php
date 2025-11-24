@extends('layouts.app') {{-- ou ton layout principal --}}

@section('title', $title)

@section('content')
<main>
    <section class="mainContent">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                {{-- Flash message succès --}}
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        ✅ {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <h1 id="mainTitle" class="text-center text-muted my-5">
                    Gérer mes préférences pour les cookies
                </h1>

                <div class="col-md-12 my-5">
                    <form class="rounded-5 p-5 d-flex align-center justify-items-center"
                          action="{{ route('cookies.preferences.save') }}"
                          method="POST"
                          autocomplete="off">

                        @csrf {{-- Token CSRF automatique --}}

                        <div class="col-md-6 d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/img/icons/cookies.svg') }}"
                                 alt="Illustration cookie-préférences"
                                 class="img-fluid w-100"
                                 style="object-fit:cover;">
                        </div>

                        <div class="col-md-6 my-5">
                            <section class="my-5">
                                <div class="d-flex flex-column gap-3 justify-content-center align-items-start">

                                    <div class="form-check">
                                        <input class="form-check-input"
                                               type="checkbox"
                                               name="analytics"
                                               id="analytics"
                                               {{ $existingPreferences['analytics'] ?? false ? 'checked' : '' }}>
                                        <label class="form-check-label" for="analytics">
                                            Autoriser les cookies analytiques
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input"
                                               type="checkbox"
                                               name="marketing"
                                               id="marketing"
                                               {{ $existingPreferences['marketing'] ?? false ? 'checked' : '' }}>
                                        <label class="form-check-label" for="marketing">
                                            Autoriser les cookies marketing
                                        </label>
                                    </div>

                                </div>

                                <div class="d-flex justify-content-center my-5">
                                    <button type="submit" class="button">Enregistrer mes préférences</button>
                                </div>
                            </section>
                        </div>
                    </form>

                    <div class="text-center my-5">
                        <a href="{{ url('/') }}">
                            <button class="button">Retour vers la page d'accueil</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
