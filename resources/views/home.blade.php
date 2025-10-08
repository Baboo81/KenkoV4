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
<section class="home">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mainContent">
                <h1 class="mainTitle"></h1>
                <span class="secondTitle text-nowrap">

                </span>
                <div class="logoContainer">
                    <img src="./assets/img/logo/logoKenko.png" alt="Logo animé" id="logoAnimation">
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Section : Banner END --}}

{{-- Section : Cards (Kenko-Ho & Kenko-web) --}}
<section class="mainSection">
    <div class="container mw-100">
        <div class="row">
            @foreach ($data['cards'] as $card)
                <div class="col-md-12 {{ $card['title'] === 'KENKO-HO' ? 'part1' : 'part2' }}">
                    <div class="card rounded-4 {{ $card['title'] === 'KENKO-HO' ? 'bg-grey' : 'bg-blue' }} p-3" style="max-width: 55rem;">
                        <div class="kenkoTitles">
                            <h3 class="text-center my-5">{{ $card['title'] }}</h3>
                        </div>

                        <img src="{{ asset($card['img']) }}" class="card-img-top rounded-3" alt="Image représentant un jardin zen">

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fs-1 text-center mb-5">{{ $card['title2'] }}</h5>
                            <p class="card-text text-center">{!! $card['p1'] !!}</p>

                            @if (!empty($card['p2']))
                                <p class="fontGreen text-center fw-bold my-3">{!! $card['p2'] !!}</p>
                            @endif

                            @if ($card['title'] === 'KENKO-WEB')
                                <div class="text-center my-5">
                                    <button onclick="window.location.href='{{ url('/kenko-web') }}';" class="button">Visiter Kenko-Web</button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
{{-- Section : Cards (Kenko-Ho & Kenko-web) END--}}
@endsection
