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
                @foreach ($dixHuilesData['huiles'] as $key => $huile)
                    <div class="row d-flex align-items-center justify-content-center my-5
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
                                <div class="text-start my-3">
                                    <h4>
                                        Usages :
                                    </h4>
                                </div>
                                @foreach ($huile['usages'] as $usage)
                                    <p class="text-muted my-1 usages-p">
                                        <i class="mx-3">&#8226;</i>{{ $usage }}
                                    </p>
                                @endforeach
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
