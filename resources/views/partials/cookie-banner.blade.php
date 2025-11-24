@if (!request()->cookie('cookie-preferences'))
<div class="container">
    <div class="row justify-content-center">
        <div id="cookie-banner"
             class="cookie-banner alert alert-dark text-center position-fixed bottom-0 col-md-6 rounded-5"
             role="alert">

            <div class="cookie-icon-container">
                <img src="{{ asset('assets/img/icons/cookiesIcon.svg') }}"
                     alt="Picto représentant un cookie"
                     style="height: 15rem;">
            </div>

            <article class="my-5">
                <p class="text-muted">
                    Nous utilisons des cookies pour améliorer votre expérience sur notre site !
                </p>
                <p class="text-muted">
                    En poursuivant votre navigation, vous acceptez notre
                    <a href="{{ route('cookies.policy') }}" class="text-decoration-underline">
                        politique de cookies
                    </a>.
                </p>
            </article>

            <div>
                <button id="accept-cookies" class="button">Accepter</button>

                <a href="{{ route('cookies.preferences') }}" class="button">
                    Gérer mes préférences
                </a>
            </div>
        </div>
    </div>
</div>
@endif
