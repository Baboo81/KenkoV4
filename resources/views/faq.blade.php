@extends('layouts.app')

@section('content')
    <section class="mt-5 text-center">
        <div class="container">
            <div class="blob-container mx-auto mb-5">
                <img src="/assets/img/FAQ/faq.svg" alt="Illustration de personnages absorbés par leurs écrans"
                    class="img-fluid">
            </div>

            <h1 class="fs-1 titleH1 my-5 p-5">
                {{ $faqData['titles']['main_Title'] ?? '' }}
            </h1>

            {{-- SECTION KENKO WEB --}}
            <div class="my-5">
                <h2 class="text-center my-5 fs-1 titleH1">
                    {{ $faqData['titles']['sub_Title1'] ?? '' }}
                </h2>
                <div class="accordion" id="accordionKenkoWeb">
                    @foreach ($faqData['kenkoWeb'] as $index => $item)
                        @php
                            $headingId = 'headingWeb' . $index;
                            $collapseId = 'collapseWeb' . $index;
                        @endphp
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="{{ $headingId }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#{{ $collapseId }}" aria-expanded="false"
                                    aria-controls="{{ $collapseId }}">
                                    <h4 class="m-0">{!! $item['question'] !!}</h4>
                                </button>
                            </h2>
                            <div id="{{ $collapseId }}" class="accordion-collapse collapse"
                                aria-labelledby="{{ $headingId }}" data-bs-parent="#accordionKenkoWeb">
                                <div class="accordion-body">
                                    {!! $item['answer'] !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- SECTION KENKO HO --}}
            <div class="my-5">
                <h2 class="text-center my-5 fs-1 titleH1">
                    {{ $faqData['titles']['sub_Title2'] ?? '' }}
                </h2>
                <div class="accordion" id="accordionKenkoHo">
                    @foreach ($faqData['kenkoHo'] as $index => $item)
                        @php
                            $headingId = 'headingHo' . $index;
                            $collapseId = 'collapseHo' . $index;
                        @endphp
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="{{ $headingId }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#{{ $collapseId }}" aria-expanded="false"
                                    aria-controls="{{ $collapseId }}">
                                    <h4 class="m-0">{!! $item['question'] !!}</h4>
                                </button>
                            </h2>
                            <div id="{{ $collapseId }}" class="accordion-collapse collapse"
                                aria-labelledby="{{ $headingId }}" data-bs-parent="#accordionKenkoHo">
                                <div class="accordion-body">
                                    {!! $item['answer'] !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- SECTION CONTACT --}}
            <div class="my-5 p-5">
                <h2 class="text-center my-5 fs-1 titleH1">
                    {{ $faqData['contact']['title'] ?? '' }}
                </h2>

                <section class="rounded-5 p-5 d-flex flex-wrap justify-content-center align-items-center contactUs">
                    {{-- Illustration --}}
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <img src="{{ $faqData['contact']['illustration']['src'] }}"
                            alt="{{ $faqData['contact']['illustration']['alt'] }}" class="img-fluid">
                    </div>

                    {{-- Méthodes de contact --}}
                    <div class="col-md-6 text-center">
                        @foreach ($faqData['contact']['methods'] as $method)
                            <p>
                                {{ $method['label'] }}
                            </p>

                            @if ($method['type'] === 'button')
                                <button onclick="window.location.href='{{ $method['action'] }}';"
                                    class="button my-4">{{ $method['text'] }}</button>
                            @elseif ($method['type'] === 'email')
                                <a href="mailto:{{ $method['value'] }}">
                                    <img class="icons my-3" src="{{ $method['icon']['src'] }}"
                                        alt="{{ $method['icon']['alt'] }}"
                                        style="height: {{ $method['icon']['height'] }};">
                                </a>
                            @elseif ($method['type'] === 'phone')
                                <div class="d-flex justify-content-center align-items-center gap-3 my-3">
                                    <img class="icons" src="{{ $method['icon']['src'] }}"
                                        alt="{{ $method['icon']['alt'] }}"
                                        style="height: {{ $method['icon']['height'] }};">
                                    <p class="m-0 fs-5">{{ $method['value'] }}</p>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
