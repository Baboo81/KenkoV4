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
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <article class="text-center">
                        <h1 class="mainTitleHero text-muted">
                            {{ $kenkoWebData['hero']['main_Title'] ?? '' }}
                        </h1>
                        <p class="subTitle text-muted">
                            {{ $kenkoWebData['hero']['sub_Title'] ?? ''}}
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>
    {{-- Section : Banner END--}}

      <!-- SVG WAVE -->
    <svg class="wave" viewBox="0 0 1440 120" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
        aria-hidden="true" role="img">
        <path d="M0,32 C200,120 400,0 720,48 C1040,96 1240,0 1440,48 L1440 120 L0 120 Z" fill="#bfc1c2"></path>
    </svg>


    {{-- Section : Purposes --}}
    <section class="purposes">
        <div class="containter">
            <div class="row">
                <div class="my5">
                    <h1 class="text-center">
                        {{ $kenkoWebData['purposes']['main_Title'] ?? '' }}
                    </h1>
                </div>
                @foreach(['article1', 'article2', 'article3'] as $tempPurposes)
                    @php $articles = $kenkoWebData['purposes'][$tempPurposes] @endphp
                    <article class="col-xl-4 col-xxl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 text-center">
                        <img src="{{ asset($articles['img']) ?? '' }} " alt="Pictos représentant les différentes propositions du suivi">
                        <h4>
                            {{ $articles['sub_Title'] ?? '' }}
                        </h4>
                        <p>
                            {{ $articles['txt'] ?? '' }}
                        </p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Section : Purposes END--}}

    {{-- Section : Offers  --}}
    {{-- Section : Offers  END--}}
@endsection
