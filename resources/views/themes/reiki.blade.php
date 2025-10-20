@extends('layouts.app')

@section('content')
    <section class="mainSection">
        <div class="container">
            {{-- Titre principal --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="mainTitleContent my-5">
                        <h2 class="text-muted text-center mb-5">{{ $reikiData['title'] }}</h2>
                        <div class="line"><span></span></div>
                    </div>
                </div>
            </div>

            {{-- Première partie : Qu'est-ce que le Reiki ? --}}
            <div class="row">
                <div class="col-md-12 my-5">
                    <div class="box rounded-5 p-4 my-5">
                        <div class="row">
                            <article class="col-md-6">
                                <h3 class="text-center my-4">{{ $reikiData['intro']['title'] }}</h3>

                                @foreach ($reikiData['intro']['paragraphs'] as $paragraph)
                                    <p class="text-muted mb-3">{{ $paragraph }}</p>
                                @endforeach

                                <ul>
                                    @foreach ($reikiData['intro']['precepts'] as $precept)
                                        <li class="my-2">{{ $precept }}</li>
                                    @endforeach
                                </ul>

                                <div class="text-center my-4">
                                    <h3>{{ $reikiData['history']['title'] }}</h3>
                                </div>

                                @foreach ($reikiData['history']['paragraphs'] as $paragraph)
                                    <p class="text-muted mb-3">{{ $paragraph }}</p>
                                @endforeach
                            </article>

                            <div class="col-md-6">
                                <img class="img-fluid rounded-4" src="{{ $reikiData['images']['intro'] }}"
                                    alt="{{ $reikiData['images']['alt_intro'] }}">
                            </div>
                        </div>

                        {{-- Deuxième partie : Séance de soin --}}
                        <div class="row mt-5">
                            <article class="col-md-6">
                                <h3 class="text-center my-4">{{ $reikiData['session']['title'] }}</h3>

                                @foreach ($reikiData['session']['paragraphs'] as $paragraph)
                                    <p class="text-muted">{{ $paragraph }}</p>
                                @endforeach

                                <p class="fw-bold my-2">{{ $reikiData['session']['warning'] }}</p>

                                <div class="text-center my-4">
                                    <h3>{{ $reikiData['session']['price_title'] }}</h3>
                                </div>

                                <p class="text-muted text-center mb-3">{{ $reikiData['session']['price'] }}</p>
                            </article>

                            <div class="col-md-6">
                                <img class="img-fluid rounded-4" src="{{ $reikiData['images']['session'] }}"
                                    alt="{{ $reikiData['images']['alt_session'] }}">
                            </div>
                        </div>
                    </div>

                    {{-- Bouton retour --}}
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
