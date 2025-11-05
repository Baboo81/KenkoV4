@extends('layouts.app')

@section('content')
    <section class="dixHuiles">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <div class="mainTitleContent blocTitleHo mb-5">
                        <h2 class="text-muted text-center mb-5">{{ $dixHuilesData['title'] }}</h2>
                        <div class="line"><span></span></div>
                    </div>
                </div>
            </div>
            <div class="box rounded-5 p-5 my-5">
                {{-- Légende --}}
                <div class="legend d-flex align-items-center gap-3 flex-wrap my-3">
                    <div class="d-flex align-items-center gap-1">
                        <span class="circleI">I</span><small>Interne</small>
                    </div>
                    <div class="d-flex align-items-center gap-1">
                        <span class="circleT">T</span><small>Topique</small>
                    </div>
                    <div class="d-flex align-items-center gap-1">
                        <span class="circleA">D</span><small>Diffusion</small>
                    </div>
                </div>
                {{-- Légende END--}}
                @foreach ($dixHuilesData['huiles'] as $key => $huile)
                    <div
                        class="row d-flex align-items-center justify-content-center my-5
            {{ $loop->iteration % 2 == 0 ? 'flex-column flex-md-row-reverse' : 'flex-column-reverse flex-md-row' }}">

                        {{-- Image --}}
                        <div class="col-md-4 text-center">
                            <img class="img-fluid rounded-5 shadow-sm" src="{{ $huile['img'] }}"
                                alt="Image représentant {{ $huile['title'] }}">
                        </div>

                        {{-- Texte --}}
                        <article class="col-md-8 p-5">
                            <div class="text-center my-5">
                                <h3>
                                    {{ $huile['title'] }}
                                </h3>
                            </div>

                            @isset($huile['composition'])
                                <div class="text-start mb-3">
                                    <h4>
                                        Composition :
                                    </h4>
                                </div>
                                <p class="text-muted">{{ $huile['composition'] }}</p>
                            @endisset

                            @isset($huile['usages'])
                                <div class="text-start my-3 d-flex align-items-center gap-2">
                                    <h4 class="mb-0">Usages :</h4>

                                    {{-- Cercles à côté du titre --}}
                                    @foreach ($huile['types'] as $type)
                                        @php
                                            $typeClass = match ($type) {
                                                'I' => 'circleI',
                                                'D' => 'circleA',
                                                'T' => 'circleT',
                                                default => 'circleA',
                                            };
                                        @endphp
                                        <span class="{{ $typeClass }}">{{ $type }}</span>
                                    @endforeach
                                </div>

                                {{-- Liste des usages --}}
                                <ul class="list-unstyled mt-2">
                                    @foreach ($huile['usages'] as $usage)
                                        <li class="text-muted my-1">{{ $usage }}</li>
                                    @endforeach
                                </ul>
                            @endisset
                        </article>
                    </div>
                @endforeach
            </div>

            <div class="text-center my-5">
                <a href="{{ $dixHuilesData['pdf'] }}" download="kitFamille.pdf">
                    <button class="button">Télécharger le PDF</button>
                </a>
            </div>

            <div class="text-center mt-auto">
                <button onclick="window.location.href='/kenko-ho';" class="button">Retourner vers Kenko-Ho</button>
            </div>
        </div>
    </section>
@endsection
