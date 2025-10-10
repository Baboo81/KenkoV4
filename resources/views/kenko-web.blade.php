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
            <div class="row d-flex justify-content-center align-items-center">
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
@endsection
