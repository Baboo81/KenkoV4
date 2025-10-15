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
    <section class="heroHo">
        <div class="heroHo-content d-flex justify-content-end">
            <article class="text-center">
                <h1 class="mainTitleHero text-muted">
                    {{ $kenkoHoData['hero']['main_Title'] ?? '' }}
                </h1>
                <p class="subTitle text-muted">
                    {{ $kenkoHoData['hero']['sub_Title'] ?? ''}}
                </p>
            </article>
        </div>
    </section>
    {{-- Section : Banner END--}}

    <!-- SVG WAVE -->
    <svg class="waveKenkoHo" viewBox="0 0 1440 120" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
        aria-hidden="true" role="img">
        <path d="M0,32 C200,120 400,0 720,48 C1040,96 1240,0 1440,48 L1440 120 L0 120 Z" fill="#f1efe9"></path>
    </svg>

    {{-- Section : Présentation --}}
    <section class="presentation">
        <div class="container">
            <div class="row">
                <img src="{{ asset('assets/img/kenkoHo/logoDoterra.svg') }}" alt="logo conseillère dōTerra" class="doterra">
            </div>
            <div class="row">
                <div class="bloc1 my-5">
                    <div class="mainTitleContent my-5">
                        <h2 class="mainSectionTitle text-muted text-center p-5">Que vous propose votre conseillère dōTERRA ?</h2>
                            <div class="underLine">
                                <div class="line"><span></span></div>
                            </div>
                    </div>
                    <section class="d-flex flex-column-reverse flex-md-row align-items-center justify-content-center myself my-5">
                        <article class="col-md-6 my-5">
                            <div class="box text-center rounded-5 p-5">
                                <p class="text-muted">Mon objectif est de vous aider à améliorer votre bien-être en incorporant les huiles essentielles à votre quotidien, en établissant de nouvelles bases solides grâces aux nutriments et en adoptant des routines saines.</p>
                                <p class="text-muted my-2">Ce suivi va vous permettre d'apprendre à utiliser et connaître les différentes huiles essentielles en toute simplicité, je serai là pour vous donner toutes les informations nécessaires ainsi que des astuces qui vous guideront sur la voie de l'autonomie et du bien-être.</p>
                                <p class="text-muted my-2">Avec le Reiki, je pourrai équilibrer la sphère énergétique de votre être, le Reiki est un art mais aussi une philosophie de vie qui a vu le jour au Japon à la fin du XIXe siècle.</p>
                            </div>
                        </article>
                        <div class="col-md-6 mx-5 my-3">
                            <img src="/assets/img/kenkoHo/Chris.jpg" alt="Photo de moi-même dans un labyrinthe de maîs" class="img-fluid rounded-5">
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    {{-- Section : Présentation END--}}
@endsection
