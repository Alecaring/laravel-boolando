@extends('layout.app')

@section('content')
    <div class="slider">
        <img class="banner-img" src="{{ Vite::asset('resources/img/banner.jpg') }}" alt="">
        <div class="logo-img-banner-container">
            <img class="logo-img-banner" src="{{ Vite::asset('resources/img/boolean-logo.png') }}" alt="">
        </div>
        <div class="left"></div>
        <div class="right">
            <div class="container-right">
                <span class="container-item">
                    <a href="{{ route('donna') }}"><span class="buble donna">DONNA</span></a>
                </span>
                <span class="container-item">
                    <a href="{{ route('uomo') }}"><span class="buble uomo">UOMO</span></a>
                </span>
                <span class="container-item">
                    <a href="{{ route('bambino') }}"><span class="buble bambino">BAMBINO</span></a>
                </span>
                <span class="container-item">
                    <a href="{{ route('saldi') }}"><span class="buble saldi">SALDI</span></a>
                </span>
            </div>
        </div>
    </div>

<footer>
    @include('partials/footer')
</footer>
@endsection