@extends('layouts.app') <!-- On suppose que tu as un layout principal -->

@section('content')
<div class="container my-5">
    <h1 class="text-center text-muted my-5">Paramètres du compte</h1>

    <!-- Affichage des messages de session -->
    @if(session('message'))
        <div class="alert alert-{{ session('message.type') }} alert-dismissible fade show text-center" role="alert">
            {{ session('message.text') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-12">
            <form class="row g-4 p-5 rounded-5" action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                @csrf <!-- CSRF token Laravel -->

                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/img/form/paramètres.svg') }}" alt="Illustration paramètre" class="img-fluid w-100" style="object-fit:cover;">
                </div>

                <div class="col-md-6">
                    <!-- Nom -->
                    <div class="mb-4">
                        <label for="lastname" class="form-label">Nom :</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname', auth()->user()->lastname) }}" placeholder="Veuillez indiquer votre nom de famille" required>
                        </div>
                        @error('lastname') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Prénom -->
                    <div class="mb-4">
                        <label for="firstname" class="form-label">Prénom :</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" id="firstname" name="firstname" value="{{ old('firstname', auth()->user()->firstname) }}" placeholder="Veuillez indiquer votre prénom" required>
                        </div>
                        @error('firstname') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="form-label">Adresse email :</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', auth()->user()->email) }}" placeholder="Veuillez indiquer votre adresse mail" required>
                        </div>
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Adresse -->
                    <div class="mb-4">
                        <label for="address" class="form-label">Adresse :</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-house-door"></i></span>
                            <input type="text" class="form-control" id="address" name="address" value="{{ old('address', auth()->user()->address) }}" placeholder="Veuillez indiquer votre adresse" required>
                        </div>
                        @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Ville -->
                    <div class="mb-4">
                        <label for="city" class="form-label">Ville :</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-buildings"></i></span>
                            <input type="text" class="form-control" id="city" name="city" value="{{ old('city', auth()->user()->city) }}" placeholder="Veuillez indiquer votre ville" required>
                        </div>
                        @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Code postal -->
                    <div class="mb-4">
                        <label for="postal_code" class="form-label">Code Postal :</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-123"></i></span>
                            <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ old('postal_code', auth()->user()->postal_code) }}" placeholder="Veuillez indiquer votre code postal" required>
                        </div>
                        @error('postal_code') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Pays -->
                    <div class="mb-4">
                        <label for="country" class="form-label">Pays :</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-globe"></i></span>
                            <input type="text" class="form-control" id="country" name="country" value="{{ old('country', auth()->user()->country) }}" placeholder="Veuillez indiquer votre pays" required>
                        </div>
                        @error('country') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <!-- Avatar -->
                    <div class="mb-4">
                        <label for="avatar" class="form-label">Avatar :</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-image"></i></span>
                            <input type="file" class="form-control" id="avatar" name="avatar">
                        </div>
                        @if(auth()->user()->avatar)
                            <img src="{{ asset(auth()->user()->avatar) }}" alt="Avatar" class="mt-3 rounded-circle" width="100">
                        @endif
                    </div>

                    <!-- Bouton Sauvegarder -->
                    <div class="text-center my-4">
                        <button type="submit" class="button">Sauvegarder</button>
                    </div>
                </div>
            </form>

            <!-- Bouton retour -->
            <div class="text-center mt-4">
                <a href="{{ url('/') }}" class="button">Retour vers la page d'accueil</a>
            </div>
        </div>
    </div>
</div>
@endsection
