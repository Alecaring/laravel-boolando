@extends('layout.app')

@section('log')
<section class="sectionLogIn">
    <div class="div">
        <h2><span>Registrati</span></h2>
        <form action="..." method="POST">
            <div>
                <label for="name">Nome</label>
                <input type="text" id="name" placeholder="Mario">
            </div>
            <div>
                <label for="surname">Cognome</label>
                <input type="text" id="surname" placeholder="Rossi">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="MarioRossi@example.com">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="text" id="password" placeholder="********">
            </div>
            <div class="bottom">
                <button>Registrati</button>
                <span>Sei già un utente?
                    <a href="{{ route('log') }}">accedi</a>
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