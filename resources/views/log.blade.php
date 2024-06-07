@extends('layout.app')

@section('log')
<section class="sectionLogIn">
    <div class="div">
        <h2><span>Accedi</span> / Registrati</h2>
        <form action="..." method="POST">
            <div>
                <label for="username">Username</label>
                <input type="text" id="username" placeholder="mario Rossi">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="********">
            </div>
            <div class="bottom">
                <button>Invia</button>
                <span>Non hai un account?
                    <a href ="{{ route('register') }}">registati</a>
                </span>
            </div>
        </form>
    </div>
    <div class="socials">
        <span><i class="fa-brands fa-facebook-f"></i></span>
        <span><i class="fa-brands fa-google"></i></span>
        <span><i class="fa-brands fa-apple"></i></span>
        <span><i class="fa-brands fa-twitter"></i></span>
    </div>
</section>
@endsection