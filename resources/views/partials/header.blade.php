<nav>
    <div class="navbar">
    <div class="left">
        <ul>
            <li><a href="{{ route('uomo') }}">UOMO</a></li>
            <li><a href="{{ route('donna') }}">DONNA</a></li>
            <li><a href="{{ route('bambino') }}">BAMBINO</a></li>
        </ul>
    </div>
    <div class="logo center">
        <a href="{{ route('home') }}">
            <img src="{{ Vite::asset('resources/img/boolean-logo.png') }}" alt="">
        </a>
    </div>
    <div class="right">
        <ul>
            <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
            <li><a href="{{ route('log') }}">LOG IN / REGISTER</a></li>
        </ul>
    </div>
    </div>
</nav>