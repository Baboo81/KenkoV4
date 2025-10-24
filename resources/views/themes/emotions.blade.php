@extends('layouts.app')

@section('content')
<section class="emotions py-5">
    <div class="container">
        <div class="text-center mb-5">
            <div class="blocTitleEmotions my-5">
                <h2 class="text-muted">{{ $emotionsData['title'] }}</h2>
                <div class="line my-2"><span></span></div>
            </div>
        </div>

        <div class="box rounded-5 p-4 my-5">
            <div class="row align-items-center">
                <article class="col-md-6 text-center">
                    @foreach ($emotionsData['intro'] as $paragraph)
                        <p class="text-muted">{{ $paragraph }}</p>
                    @endforeach

                    <div class="text-center my-4">
                        <h3>{{ $emotionsData['guide_title'] }}</h3>
                    </div>

                    <p class="text-muted">{{ $emotionsData['guide_text'] }}</p>
                </article>

                <div class="col-md-6 text-center">
                    <img class="img-fluid rounded-4"
                         src="{{ $emotionsData['image']['src'] }}"
                         alt="{{ $emotionsData['image']['alt'] }}">
                </div>
            </div>

            <div class="text-center my-5">
                <a href="{{ $emotionsData['pdf']['path'] }}"
                   download="{{ $emotionsData['pdf']['filename'] }}">
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
