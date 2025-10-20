@extends('layouts.app')

@section('content')
    <section class="peau py-5">
        <div class="container">
            <header class="text-center mb-5">
                <h2 class="text-muted">{{ $peauData['title'] }}</h2>
                <div class="line"><span></span></div>
            </header>

            <div class="box rounded-5 p-4 my-5 shadow-sm">
                <div class="row align-items-center">
                    <article class="col-md-6">
                        @foreach ($peauData['intro'] as $paragraph)
                            <p class="text-muted">{{ $paragraph }}</p>
                        @endforeach

                        <div class="text-center my-4">
                            <h3>{{ $peauData['guide_title'] }}</h3>
                        </div>

                        <p class="text-muted mb-3">{{ $peauData['guide_text'] }}</p>
                    </article>

                    <div class="col-md-6 text-center">
                        <img class="img-fluid rounded-4" src="{{ $peauData['image']['src'] }}"
                            alt="{{ $peauData['image']['alt'] }}">
                    </div>
                </div>

                <div class="text-center my-5">
                    <a href="{{ $peauData['pdf']['path'] }}" download="{{ $peauData['pdf']['filename'] }}">
                        <button class="button">Télécharger le PDF</button>
                    </a>
                </div>
            </div>

            <div class="text-center mt-5">
                <button onclick="window.location.href='/kenko-ho';" class="button">
                    Retourner vers Kenko-Ho
                </button>
            </div>
        </div>
    </section>
@endsection
