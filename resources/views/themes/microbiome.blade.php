@extends('layouts.app')

@section('content')
    <section class="microbiome py-5">
        <div class="container">
            <header class="text-center mb-5">
                <h2 class="text-muted">{{ $microbiomeData['title'] }}</h2>
                <div class="line"><span></span></div>
            </header>

            <div class="box rounded-5 p-4 my-5 shadow-sm">
                <div class="row align-items-center">
                    <article class="col-md-6 mb-4">
                        @foreach ($microbiomeData['intro'] as $paragraph)
                            <p class="text-muted">{{ $paragraph }}</p>
                        @endforeach
                    </article>

                    <div class="col-md-6 text-center">
                        <img class="img-fluid rounded-4" src="{{ $microbiomeData['images']['main']['src'] }}"
                            alt="{{ $microbiomeData['images']['main']['alt'] }}" style="height: 27rem;">
                    </div>
                </div>

                <div class="row align-items-center my-5">
                    <div class="col-md-6 text-center mb-4 mb-md-0">
                        <img class="img-fluid rounded-4" src="{{ $microbiomeData['images']['secondary']['src'] }}"
                            alt="{{ $microbiomeData['images']['secondary']['alt'] }}">
                    </div>

                    <article class="col-md-6 text-center">
                        <h3 class="my-4">{{ $microbiomeData['guide']['title'] }}</h3>
                        <p class="text-muted">{{ $microbiomeData['guide']['text'] }}</p>
                    </article>
                </div>

                <div class="text-center my-5">
                    <a href="{{ $microbiomeData['pdf']['path'] }}" download="{{ $microbiomeData['pdf']['filename'] }}">
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
