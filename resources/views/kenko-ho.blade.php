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
                    {{ $kenkoWebData['hero']['main_Title'] ?? '' }}
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
        <path d="M0,32 C200,120 400,0 720,48 C1040,96 1240,0 1440,48 L1440 120 L0 120 Z" fill="#e3c7af"></path>
    </svg>
@endsection
