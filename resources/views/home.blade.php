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
                <span class="secondTitle text-nowrap">Bienvenue dans deux univers ...</span>
                <div class="logoContainer">
                    <img src="./assets/img/logo/logoAnimate.svg" alt="Logo animé" id="logoAnimation">
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Section : Banner END --}}
@endsection
