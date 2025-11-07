<x-guest-layout>
    <section class="mainSection">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-md-5 text-center mb-4 mb-md-0">
                    <img src="{{ asset('assets/img/form/forgotPassword.svg') }}"
                         alt="Illustration mot de passe oublié"
                         class="img-fluid rounded-4 shadow-sm">
                </div>

                <div class="col-md-6">
                    @if (session('status'))
                        <div class="alert alert-success text-center mb-4">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="rounded-5 p-5 bg-white" method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="email" class="form-label mb-3 fontDastin">Adresse e-mail</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       id="email" name="email"
                                       placeholder="Entrez votre adresse e-mail"
                                       value="{{ old('email') }}" required>
                            </div>
                            @error('email')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="button">Envoyer le lien</button>
                        </div>

                        <div class="text-center mt-5">
                            <a href="{{ route('login') }}" class="text-muted">Retour à la connexion</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
</x-guest-layout>

