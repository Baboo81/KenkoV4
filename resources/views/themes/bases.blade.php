@extends('layouts.app')

@section('content')
    <section class="mainSection">
        <div class="container">
            {{-- Titre principal --}}
            <div class="row">
                <div class="text-center">
                    <div class="mainTitleContent blocTitleHo my-5">
                        <h2 class="text-muted text-center mb-4">{{ $basesData['title'] }}</h2>
                        <div class="line"><span></span></div>
                    </div>
                </div>
            </div>

            {{-- Contenu principal --}}
            <div class="row">
                <div class="col-md-12 my-5">
                    <div class="box rounded-5 p-5 my-5">
                        <div class="row">
                            {{-- Texte + liste --}}
                            <article class="col-md-6">
                                <p class="text-muted text-center">{{ $basesData['intro'] }}</p>
                                <ul class="mx-5">
                                    @foreach ($basesData['pillars'] as $pillar)
                                        <li class="my-3 fs-3 fontBeige">{{ $pillar }}</li>
                                    @endforeach
                                </ul>

                                <div class="text-center my-4">
                                    <h3>{{ $basesData['guides_title'] }}</h3>
                                </div>
                                <p class="text-muted text-center mb-3">{{ $basesData['guides_intro'] }}</p>
                            </article>

                            {{-- Image --}}
                            <div class="col-md-6">
                                <img class="img-fluid rounded-4" src="{{ $basesData['image']['src'] }}"
                                    alt="{{ $basesData['image']['alt'] }}" style="width: 30em;">
                            </div>
                        </div>

                        {{-- Grille de guides PDF --}}
                        <div class="container my-5">
                            <div class="row justify-content-center text-center g-4">
                                @foreach ($basesData['guides'] as $guide)
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <h4 class="my-3 fontBeige">{{ $guide['title'] }}</h4>
                                        <a href="{{ $guide['file'] }}" download="{{ $guide['download_name'] }}">
                                            <button class="button">Télécharger le PDF</button>
                                        </a>
                                    </div>
                                @endforeach
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
