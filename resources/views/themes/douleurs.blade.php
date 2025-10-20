@extends('layouts.app')

@section('content')
<section class="mainSection">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mainTitleContent my-5">
                    <h2 class="text-muted text-center mb-5">{{ $douleursData['title'] }}</h2>
                    <div class="line"><span></span></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 my-5">
                <div class="box rounded-5 p-4 my-5">
                    <div class="row">
                        <article class="col-md-6">
                            @foreach ($douleursData['intro']['paragraphs'] as $paragraph)
                                <p class="text-muted">{{ $paragraph }}</p>
                            @endforeach

                            <div class="text-center my-4">
                                <h3>{{ $douleursData['guide']['title'] }}</h3>
                            </div>
                            <p class="text-muted mb-3">{{ $douleursData['guide']['description'] }}</p>
                        </article>

                        <div class="col-md-6">
                            <img class="img-fluid rounded-4"
                                 src="{{ $douleursData['images']['main'] }}"
                                 alt="{{ $douleursData['images']['alt'] }}"
                                 style="width: 30em;">
                        </div>
                    </div>

                    <div class="text-center my-5">
                        <a href="{{ $douleursData['pdf']['path'] }}" download="{{ $douleursData['pdf']['filename'] }}">
                            <button class="button">Télécharger le PDF</button>
                        </a>
                    </div>
                </div>

                <div class="text-center mt-auto">
                    <button onclick="window.location.href='/kenko-ho';" class="button">
                        Retourner vers Kenko-Ho
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
