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
            <li>icon</li>
            <li>icon</li>
            <li>icon</li>
        </ul>
    </div>
    </div>
</nav>