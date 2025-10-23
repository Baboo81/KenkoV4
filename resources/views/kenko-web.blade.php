@extends('layouts.app')

@section('content')
    {{-- Div animation : progression de la page --}}
    <div id="scroll-indicator">
        <div class="inner-circle">
            <div class="scroll-arrow"></div>
        </div>
    </div>
    {{-- Div animation : progression de la page END --}}

    {{-- Section : Banner --}}
    <section class="hero">
        <div class="hero-content">
            <article class="text-center">
                <h1 class="mainTitleHero text-muted">

                </h1>
                <p class="subTitle text-muted">
                    {{ $kenkoWebData['hero']['sub_Title'] ?? ''}}
                </p>
            </article>
        </div>
    </section>
    {{-- Section : Banner END--}}

    <!-- SVG WAVE -->
    <svg class="wave" viewBox="0 0 1440 120" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
        aria-hidden="true" role="img">
        <path d="M0,32 C200,120 400,0 720,48 C1040,96 1240,0 1440,48 L1440 120 L0 120 Z" fill="#FFFFF0"></path>
    </svg>


    {{-- Section : Purposes --}}
    <section class="purposes">
        <div class="containter">
            <div class="row">
                <div class="my5">
                    <h1 class="text-center titleH1">
                        {{ $kenkoWebData['purposes']['main_Title'] ?? '' }}
                    </h1>
                </div>
                <div class="d-flex pictoBlocWeb">
                    @foreach(['article1', 'article2', 'article3'] as $tempPurposes)
                        @php $articles = $kenkoWebData['purposes'][$tempPurposes] @endphp
                        <article class="col-xl-4 col-xxl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 text-center">
                            <img src="{{ asset($articles['img']) ?? '' }} " class="img-fluid" alt="Pictos représentant les différentes propositions du suivi">
                            <h4 class="mb-5">
                                {{ $articles['sub_Title'] ?? '' }}
                            </h4>
                            <p class="text-muted">
                                {{ $articles['txt'] ?? '' }}
                            </p>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- Section : Purposes END--}}

    {{-- Section : Offers  --}}
    <section class="offers">
        <div class="container">
            <div class="row">
                <div class="my-5">
                    <h1 class="text-center titleH1">
                        {{ $kenkoWebData['offers']['main_Title'] ?? '' }}
                    </h1>
                </div>
                @foreach($kenkoWebData['offers']['cards'] as $index => $offer)
                <div class="col-xl-4 col-xxl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-5">
                    <div class="card rounded-4">
                        <img src="{{ asset($offer['img']) ?? '' }}" class="card-img-top rounded-top-4" alt="{{ $offer['alt'] }}">
                        <div class="card-body d-flex flex-column text-center">
                            <h5 class="card-title text-center fs-3 my-3">{{ $offer['title'] }}</h5>
                            <h6 class="fontBolded fs-5 my-3">{{ $offer['price'] }}</h6>
                            <p class="card-text">{{ $offer['text'] }}</p>
                            <div class="button-container mt-auto justify-content-center">
                                <button onclick="showPopup('popup{{ $index + 1 }}')" class="my-3">À qui s'adresse cette offre ?</button>
                            </div>
                        </div>

                        {{-- Popup --}}
                        <div class="popup-container" id="popup{{ $index + 1 }}">
                            <div class="popup">
                                <h4 class="fs-3 my-3">{{ $offer['popup']['title'] }}</h4>
                                <img src="{{ asset($offer['popup']['img']) ?? '' }}" alt="">
                                <p class="text-start my-3">{{ $offer['popup']['intro'] }}</p>
                                <ul class="text-start">
                                    @foreach($offer['popup']['items'] as $item)
                                        <li class="my-2">&#9679; &nbsp;{{ $item }}</li>
                                    @endforeach
                                </ul>
                                @if(!empty($offer['popup']['outro']))
                                    <p class="pPopUp fs-6 my-3">{{ $offer['popup']['outro'] }}</p>
                                @endif
                                <div class="button-container justify-content-center">
                                    <button onclick="closePopup('popup{{ $index + 1 }}')" class="my-3">Fermer</button>
                                </div>
                            </div>
                        </div>
                        {{-- Popup END --}}
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
    {{-- Section : Offers  END--}}

    {{-- Section : Skills --}}
    <section class="skills">
        <div class="container">
            <div class="row">
                {{-- Bloc : img --}}
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <img src="/assets/img/kenkoWeb/pictos/atouts.svg" class="pictoAtoutsPerso" alt="Picto représentant deux personnages tenant un panneau">
                </div>
                {{-- Bloc : articles/pictos --}}
                <div class="col-md-6 d-flex flex-column skillsContent">
                    @foreach(['article1', 'article2', 'article3'] as $tempSkills)
                        @php
                            $article = $kenkoWebData['skills'][$tempSkills];
                        @endphp
                        <article class="text-center">
                            <img src="{{ asset($article['img']) ?? '' }}" class="pictoAtouts" alt="{{ $article['text'] }}">
                            <p class="text-muted p-1">
                                {{  $article['text'] ?? '' }}
                            </p>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- Section : Skills END--}}

    {{-- Section : Time Line --}}
    <section class="timeLine">
        <div class="container">
            <div class="row">
                <div class="my-5">
                    <h1 class="text-center titleH1">
                        {{ $kenkoWebData['timeline']['main_Title'] ?? '' }}
                    </h1>
                </div>
            </div>
            <section class="container py-5">
                <div class="timeline">
                    @foreach($kenkoWebData['timeline']['steps'] as $step)
                        <div class="timeline-item">
                            <div class="timeline-content text-center">
                                <h4 class="fw-bold my-3">{{ $step['title'] ?? '' }}</h4>
                                <img src="{{ asset($step['img'] ?? '') }}" alt="{{ $step['alt'] ?? '' }}" class="me-3 my-2" width="{{ $step['width'] ?? 60 }}">
                                <p class="text-muted">{{ $step['text'] ?? '' }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </section>
    {{-- Section : Time Line END--}}

    {{-- Section : Maintenance --}}
    <section class="maintenance">
        <div class="container">
            <div class="row">
                <div class="text-center my-5">
                    <h1 class="titleH1">
                        {{ $kenkoWebData['maintenance']['main_Title'] ?? '' }}
                    </h1>
                </div>
                <div class="boxWeb rounded-5 p-5 d-flex align-center justify-items-center">
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <img
                            src="{{ $kenkoWebData['maintenance']['img'] }}"
                            alt="{{ $kenkoWebData['maintenance']['alt'] }}"
                            class="img-fluid w-100"
                            style="object-fit:cover;"
                        >
                    </div>

                    <div class="col-md-6">
                        <article class="fontWhite">
                            <p class="text-center">{!! $kenkoWebData['maintenance']['intro'] !!}</p>
                            <h4 class="text-center my-3">{{ $kenkoWebData['maintenance']['title'] }}</h4>

                            @foreach($kenkoWebData['maintenance']['types'] as $type)
                                <ul class="mx-3 my-4">
                                    <h5>{{ $type['category'] }}</h5>
                                    @foreach($type['items'] as $item)
                                        <li class="my-2">{{ $loop->iteration }}. {{ $item }}</li>
                                    @endforeach
                                </ul>
                            @endforeach
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Section : Maintenance END--}}
    <section class="hosting">
        <div class="container">
            <div class="row">
                <div class="text-center my-5">
                    <h1 class="titleH1">
                        {{ $kenkoWebData['hosting']['main_Title'] ?? '' }}
                    </h1>
                </div>
                <section class="hosting">
                    <div class="container">
                        <div class="row">
                            <div class="boxWeb rounded-5 p-5 d-flex align-center justify-items-center">
                                {{-- Bloc gauche : texte --}}
                                <div class="col-md-6">
                                    <article class="fontWhite">
                                        <p class="text-center">{!! $kenkoWebData['hosting']['intro'] !!}</p>

                                        @foreach($kenkoWebData['hosting']['sections'] as $section)
                                            <div class="my-3">
                                                <h5 class="my-2">{{ $section['title'] }}</h5>
                                                <p>{!! $section['txt'] !!}</p>
                                            </div>
                                        @endforeach
                                    </article>
                                </div>

                                {{-- Bloc droit : image --}}
                                <div class="col-md-6 d-flex align-items-center justify-content-center">
                                    <img
                                        src="{{ $kenkoWebData['hosting']['img'] ?? '' }}"
                                        alt="{{ $kenkoWebData['hosting']['alt'] ?? '' }}"
                                        class="img-fluid w-100"
                                        style="object-fit:cover;"
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    {{-- Section : hébergement --}}

    {{-- Section : Trust --}}
    <section class="trustSection">
        <div class="container">
            <div class="row align-items-center">
                <div class="trustBox d-flex justify-content-center align-items-center">
                    {{-- Texte à gauche --}}
                    <div class="col-md-3 d-flex flex-column align-items-start text-md-start text-center mx-5">
                        <article class="text-center">
                            <p class="fs-4 fontWhite mb-3">{{ $kenkoWebData['trust']['title1'] ?? '' }}</p>
                            <p class="fs-3 fontWhite">{{ $kenkoWebData['trust']['title2'] ?? '' }}</p>
                        </article>
                    </div>

                    {{-- Logos à droite --}}
                    <div class="col-md-3 d-flex justify-content-center align-items-center position-relative logo-container">
                        @foreach($kenkoWebData['trust']['logos'] as $index => $logo)
                            <img
                                id="logo{{ $index + 1 }}"
                                class="logo {{ $index === 0 ? 'active' : '' }}"
                                src="{{ asset($logo['src']) ?? '' }}"
                                alt="{{ $logo['alt'] ?? '' }}"
                                style="height: 10rem;"
                            >
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Section : Trust END--}}
@endsection
