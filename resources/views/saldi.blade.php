@extends('layout/app')




@section('content')
<section class="container-card">

@php
        $hasDiscountProducts = false;
    @endphp

@foreach($products as $product)
        @php
            $discount = null;
            foreach ($product["badges"] as $badge) {
                if ($badge["type"] === "discount") {
                    $discount = $badge["value"];
                    break;
                }
            }
        @endphp

        @if ($discount)
            @php
                $hasDiscountProducts = true;
            @endphp
            <div class="cards">
                <div class="img-front">
                    <img class="img" src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}" alt="">
                </div>
                <div class="img-back">
                    <img class="img" src="{{ Vite::asset('resources/img/' . $product['backImage']) }}" alt="">
                </div>
                <div class="discount-badge">{{ $discount }}</div>
                <div class="product-info">
                    <h2>{{ $product['brand'] }} - {{ $product['name'] }}</h2>
                    <p>Prezzo: {{ $product['price'] }} €</p>
                </div>
            </div>
        @endif
    @endforeach
</section>

@if (!$hasDiscountProducts)
<div class="empty-banner">
    <img src="{{ Vite::asset('resources/img/empty.png') }}" alt="">
    <p class="ops">Ops...
        <span>Sembra che al momento qui non ci siano prodotti disponibili.</span>
    </p>
</div>
@endif
@if (!$hasDiscountProducts)
<div class="btn-container">
    <button>VISUALIZZA TUTTO</button>
</div>
@endif

@endsection