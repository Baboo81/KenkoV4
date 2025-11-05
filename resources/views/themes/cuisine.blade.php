@extends('layouts.app')

@section('content')
    <section class="cuisine py-5">
        <div class="container">
            <div class="text-center mb-5">
                <div class="blocTitleCuisine my-5">
                    <h2 class="text-muted mb-4">{{ $cuisineData['title'] }}</h2>
                    <div class="line my-2"><span></span></div>
                </div>
            </div>

            <div class="box rounded-5 text-center p-5 shadow-sm">
                <div class="row align-items-center g-4 flex-column-reverse flex-md-row">
                    <article class="col-md-6 text-center">
                        @foreach ($cuisineData['intro']['paragraphs'] as $paragraph)
                            <p class="text-muted mb-4">{{ $paragraph }}</p>
                        @endforeach

                        <div class="text-center my-5">
                            <h3 class="h4 fw-bold mb-3">{{ $cuisineData['guide']['title'] }}</h3>
                            <p class="text-muted mb-4">{{ $cuisineData['guide']['description'] }}</p>
                            <a href="{{ $cuisineData['guide']['pdf'] }}" download="{{ $cuisineData['guide']['pdf_name'] }}"
                                class="button">
                                <div class="mt-2">
                                    Télécharger le PDF
                                </div>
                            </a>
                        </div>
                    </article>

                    <figure class="col-md-6 text-center">
                        <img class="img-fluid rounded-4 shadow-sm" src="{{ $cuisineData['intro']['image'] }}"
                            alt="{{ $cuisineData['intro']['alt_image'] }}">
                    </figure>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <button onclick="window.location.href='{{ $cuisineData['back_button']['url'] }}';" class="button px-4">
                        {{ $cuisineData['back_button']['label'] }}
                    </button>
                </div>
            </div>
        </div>
    </section>
    </main>
@endsection
