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
                <h1 class="mainTitleHeroHo text-muted">

                </h1>
                <p class="subTitle text-muted">
                    {{ $kenkoHoData['hero']['sub_Title'] ?? '' }}
                </p>
            </article>
        </div>
    </section>
    {{-- Section : Banner END --}}

    <!-- SVG WAVE -->
    <svg class="waveKenkoHo" viewBox="0 0 1440 120" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
        aria-hidden="true" role="img">
        <path d="M0,32 C200,120 400,0 720,48 C1040,96 1240,0 1440,48 L1440 120 L0 120 Z" fill="#e3c7af"></path>
    </svg>

    {{-- Section : Présentation --}}
    <section class="presentation">
        <div class="container">

            {{-- Logo --}}
            <div class="row">
                <img src="{{ asset($kenkoHoData['presentation']['logo']) ?? '' }}" alt="logo conseillère dōTERRA"
                    class="doterra">
                {{-- Bloc dōTERRA  --}}
                <div class="col-md-12 text-center p-3">
                    <p class="fontPink">
                        {{ $kenkoHoData['presentation']['doterra']['texte'] ?? '' }}
                    </p>
                    <div class="text-center my-5">
                        <a href="{{ $kenkoHoData['presentation']['doterra']['url'] ?? '#' }}" target="_blank"
                            rel="noopener noreferrer">
                            <button class="button">
                                {{ $kenkoHoData['presentation']['doterra']['btn'] ?? 'Découvrir dōTERRA' }}
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Titre principal --}}
            <div class="row">
                <div class="bloc1 my-5">
                    <div class="mainTitleContent my-5">
                        <h2 class="mainSectionTitle text-muted text-center p-5">
                            {{ $kenkoHoData['presentation']['title'] ?? '' }}
                        </h2>
                        <div class="underLine">
                            <div class="line"><span></span></div>
                        </div>
                    </div>

                    {{-- Texte + Image --}}
                    <section
                        class="d-flex flex-column-reverse flex-md-row align-items-center justify-content-center myself my-5">
                        <article class="col-md-6 my-5">
                            <div class="box text-center rounded-5 p-5">
                                @foreach ($kenkoHoData['presentation']['paragraphs'] as $paragraph)
                                    <p class="text-muted my-2">{{ $paragraph }}</p>
                                @endforeach
                            </div>
                        </article>
                        <div class="col-md-6 mx-5 my-3">
                            <img src="{{ asset($kenkoHoData['presentation']['image']) ?? '' }}"
                                alt="{{ $kenkoHoData['presentation']['alt_image'] ?? '' }}" class="img-fluid rounded-5">
                        </div>
                    </section>
                </div>
            </div>

            {{-- Thématiques --}}
            <div class="row">
                <div class="mainTitleContent mb-5">
                    <h2 class="mainSectionTitle text-muted text-center p-5">
                        {{ $kenkoHoData['presentation']['themes_title'] ?? '' }}
                    </h2>
                    <div class="line"><span></span></div>
                </div>

                <section class="my-5 btnBloc">
                    <div class="row justify-content-center g-3">
                        @foreach ($kenkoHoData['presentation']['themes'] as $index => $theme)
                            <div class="col-6 col-md-2 d-flex justify-content-center">
                                <a href="{{ $theme['url'] }}"  class="button text-center d-inline-block p-2">
                                    {{ $theme['label'] }}
                                </a>
                            </div>

                            {{-- Saut de ligne après 5 boutons --}}
                            @if (($index + 1) % 5 == 0)
                                <div class="w-100"></div>
                            @endif
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </section>
    {{-- Section : Présentation END --}}

    {{-- Section : Slider --}}
    <section class="w-100 slider">
        <div class="sliderSection w-100">
            <div class="sliderContent w-100">
                <div class="slide">
                    @foreach ($kenkoHoData['slider'] as $slide)
                        <div class="item {{ $slide['image_class'] }}">
                            <div class="content text-center">
                                <div class="name {{ $slide['color_class'] }} my-5">{{ $slide['title'] }}</div>
                                <div class="description {{ $slide['color_class'] }}">{{ $slide['description'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- Btn --}}
                <div class="btn-prev-next justify-content-center d-flex flex-wrap">
                    <div class="mx-2 mx-md-5">
                        <button class="button prev">
                            <i data-lucide="chevron-left" class="me-2" style="width: 34px; height: 34px"></i>
                        </button>
                    </div>
                    <div class="mx-2 mx-md-5">
                        <button class="button next">
                            <i data-lucide="chevron-right" class="me-2" style="width: 34px; height: 34px"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Section : Slider END --}}

    {{-- Section : Témoignages --}}
    <section class="my-5 commentsBox px-3 px-sm-5">
        <div class="container my-5" id="testimonials">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($kenkoHoData['testimonials'] as $index => $testimonial)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <div class="testimonial p-3 mb-3 border rounded shadow-sm">
                                        <div class="testimonial-rating">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <span
                                                    class="star {{ $i <= $testimonial['rating'] ? 'filled' : '' }}">★</span>
                                            @endfor
                                        </div>
                                        <div class="testimonial-comment">
                                            <p class="mb-1"><strong>{{ $testimonial['name'] }}</strong></p>
                                            <p>{{ $testimonial['comment'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Form d'ajout d'avis -->
            <div class="row mt-5">
                <div class="col-md-8 mx-auto">
                    <h3 class="text-center">Laissez votre avis</h3>

                    @if (!empty($message))
                        <div class="alert alert-{{ $message['type'] }} alert-dismissible fade show text-center"
                            role="alert">
                            {{ $message['text'] }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    <form id="testimonialForm" method="POST" action="{{ route('testimonials.store') }}">
                        @csrf
                        <div class="col-md-12 d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/img/form/commentsBox.svg') }}" alt="Illustration commentsBox"
                                class="img-fluid">
                        </div>
                        <div class="col-md-12">
                            <div class="my-4">
                                <label for="userName" class="form-label mb-3">Votre Nom</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" class="form-control" id="userName" name="name"
                                        placeholder="Inscrivez votre nom" required>
                                </div>
                            </div>

                            <div class="my-4">
                                <label class="form-label mb-3">Votre Note : cliquez sur l'un des ronds, pour évaluer mon
                                    service !</label>
                                <div class="rating">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <input type="radio" id="star{{ $i }}" name="rating"
                                            value="{{ $i }}" required>
                                        <label for="star{{ $i }}">★</label>
                                    @endfor
                                </div>
                            </div>

                            <div class="my-4">
                                <label for="testimonialMessage" class="form-label mb-3">Votre Témoignage</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-chat-text"></i></span>
                                    <textarea class="form-control" id="testimonialMessage" name="comment" rows="3"
                                        placeholder="Laissez-moi un commentaire" required></textarea>
                                </div>
                            </div>

                            <div class="my-5">
                                <button type="submit" class="button w-100">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- Section : Témoignages END --}}
@endsection
