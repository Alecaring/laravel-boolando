@extends('layout/app')




@section('content')
<section class="container-card">

    @php
    $maleProduct = false;
    @endphp

    @foreach($products as $product)
    @if($product["gender"] === "female")
    @php
    $maleProduct = true;
    @endphp
    <div class="cards">
        <div class="img-front">
            <img class="img" src="{{ Vite::asset('resources/img/') }}{{ $product['frontImage'] }}" alt="">
        </div>
        <div class="img-back">
            <img class="img" src="{{ Vite::asset('resources/img/') }}{{ $product['backImage'] }}" alt="">

        </div>
    </div>
    @endif
    @endforeach
</section>

@if(!$maleProduct)
<div class="empty-banner">
    <img src="{{ Vite::asset('resources/img/empty.png') }}" alt="">
    <p class="ops">Ops...
        <span>Sembra che al momento qui non ci siano prodotti disponibili.</span>
    </p>
</div>
@endif
@if($maleProduct)
<div class="btn-container">
    <button>VISUALIZZA TUTTO</button>
</div>
@endif

@endsection