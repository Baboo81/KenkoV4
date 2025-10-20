@extends('layouts.app')

@section('content')
<section class="sommeil py-5">
    <div class="container">
        <header class="text-center mb-5">
            <h2 class="text-muted">{{ $sommeilData['title'] }}</h2>
            <div class="line"><span></span></div>
        </header>

        <div class="box rounded-5 p-4 my-5">
            <div class="row align-items-center">
                <article class="col-md-6">
                    @foreach ($sommeilData['intro'] as $paragraph)
                        <p class="text-muted">{{ $paragraph }}</p>
                    @endforeach

                    <div class="text-center my-4">
                        <h3>{{ $sommeilData['guide_title'] }}</h3>
                    </div>

                    <p class="text-muted mb-3">{{ $sommeilData['guide_text'] }}</p>
                </article>

                <div class="col-md-6 text-center">
                    <img class="img-fluid rounded-4"
                         src="{{ $sommeilData['image']['src'] }}"
                         alt="{{ $sommeilData['image']['alt'] }}">
                </div>
            </div>

            <div class="text-center my-5">
                <a href="{{ $sommeilData['pdf']['path'] }}"
                   download="{{ $sommeilData['pdf']['filename'] }}">
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
