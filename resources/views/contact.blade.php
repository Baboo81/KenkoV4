@extends('layouts.app')

@section('content')
    <section class="contact my-5">
        <div class="container">
            <h1 class="text-center text-muted mb-5 titleH1">Formulaire de contact</h1>

            {{-- Messages : success/error  --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
             {{-- Messages : success/error  END--}}

            <div class="row align-items-center g-5">
                {{-- Illustration --}}
                <div class="col-md-6 d-none d-md-flex justify-content-center">
                    <img src="{{ asset('assets/img/form/contact.svg') }}" alt="Illustration contact"
                        class="img-fluid rounded-4 shadow-sm" style="object-fit: cover;">
                </div>

                {{-- Formulaire --}}
                <div class="col-md-6 col-12">
                    <form class="rounded-4 shadow-lg p-4 bg-light" action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">Nom</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Votre nom" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="firstName" class="form-label fw-semibold">Prénom</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" id="firstName" name="firstName"
                                    placeholder="Votre prénom" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="tel" class="form-label fw-semibold">Téléphone</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                <input type="tel" class="form-control" id="tel" name="tel"
                                    placeholder="Votre numéro" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Votre adresse mail" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label fw-semibold">Message</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-chat-text"></i></span>
                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Laissez-moi votre message"
                                    required></textarea>
                            </div>
                        </div>

                        <div class="text-center my-5">
                            <button type="submit" class="button">Envoyer</button>
                        </div>
                    </form>

                    <div class="my-5">
                        <a href="/" class="text-decoration-none">
                            <button class="button" type="button">Retour vers la page d'accueil</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
