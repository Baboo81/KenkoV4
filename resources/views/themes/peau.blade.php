@extends('layouts.app')

@section('content')
    <section class="peau py-5">
        <div class="container">
            <div class="text-center">
                <div class="mainTitleContent blocTitleHo mb-5">
                    <h2 class="text-muted text-center mb-4">{{ $peauData['title'] }}</h2>
                    <div class="line"><span></span></div>
                </div>
            </div>
            <div class="box rounded-5 p-5 my-5 shadow-sm">
                <div class="row justify-content-center align-items-center">
                    <article class="col-md-6 text-center">
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
