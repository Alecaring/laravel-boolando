<nav>
    <div class="navbar">
    <div>
        <ul>
            <li><a href="{{ route('uomo') }}">uomo</a></li>
            <li><a href="{{ route('donna') }}">donna</a></li>
            <li><a href="{{ route('bambino') }}">bambino</a></li>
        </ul>
    </div>
    <div class="logo">
        <a href="{{ route('home') }}">
            <img src="{{ Vite::asset('resources/img/boolean-logo.png') }}" alt="">
        </a>
    </div>
    <div>
        <ul>
            <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
            <li><a href="#"><i class="fa-solid fa-bag-shopping"></i></a></li>
        </ul>
    </div>
    </div>
</nav>