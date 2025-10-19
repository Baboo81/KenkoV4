@extends('layouts.app')

@section('content')
 <section class="mainSection">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mainTitleContent mb-5">
                    <h2 class="text-muted text-center mb-5">{{ $dixHuilesData['title'] }}</h2>
                    <div class="line"><span></span></div>
                </div>
            </div>
        </div>

       @foreach ($dixHuilesData['huiles'] as $key => $huile)
    <div class="row flex-column-reverse flex-md-row d-flex align-items-center my-5">
        <article class="col-md-8">
            <div class="text-center my-5">
                <h3>{{ $huile['title'] }}</h3>
            </div>

            @isset($huile['composition'])
                <div class="text-start mb-3">
                    <h4>Composition :</h4>
                </div>
                <p class="text-muted">{{ $huile['composition'] }}</p>
            @endisset

            @isset($huile['usages'])
                <div class="text-start my-3">
                    <h4>Usages :</h4>
                </div>
                @foreach ($huile['usages'] as $usage)
                    <p class="text-muted my-1"><i class="mx-3">&#8226;</i>{{ $usage }}</p>
                @endforeach
            @endisset
        </article>

        <div class="col-md-4 text-center">
            <img class="img-fluid" src="{{ $huile['img'] }}" alt="Image représentant {{ $huile['title'] }}">
        </div>
    </div>
@endforeach
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
