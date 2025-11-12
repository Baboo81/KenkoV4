<x-guest-layout>
    <section class="mainSection">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <h1 class="text-center text-muted mb-5">Réinitialiser le mot de passe</h1>

                <div class="col-md-8 my-5">
                    <form class="rounded-5 p-5" method="POST" action="{{ route('password.update') }}">
                        @csrf
                        @method('PUT')


                        <input type="hidden" name="token" value="{{ $token }}">

                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="form-label mb-3">Adresse e-mail</label>
                            <input type="email" id="email" name="email"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="Votre adresse e-mail"
                                value="{{ request()->query('email') ?? old('email') }}" required>
                            @error('email')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Nouveau mot de passe -->
                        <div class="mb-4">
                            <label for="password" class="form-label mb-3">Nouveau mot de passe</label>
                            <input type="password" id="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" placeholder="********"
                                required>
                            @error('password')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Confirmation -->
                        <div class="mb-5">
                            <label for="password_confirmation" class="form-label mb-3">Confirmer le mot de passe</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="form-control" placeholder="********" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="button">Réinitialiser le mot de passe</button>
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
