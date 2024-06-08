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
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="rgb(142, 137, 128)" fill-opacity="1" d="M0,192L120,186.7C240,181,480,171,720,176C960,181,1200,203,1320,213.3L1440,224L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
    </svg>
</div>













<div class="container-sec-wave">
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio ad perferendis a sit, fugit harum, totam voluptate sint deserunt qui error quasi enim, recusandae ut deleniti maxime similique praesentium aut.
Fugit cumque nesciunt incidunt quas ex facere, accusantium, dolores vel nemo quidem at esse, error blanditiis iste beatae nostrum dicta odio natus minima eum voluptatum possimus quasi autem reiciendis! Dolorem.
Reiciendis expedita necessitatibus numquam? Suscipit nesciunt in eum porro ad, quasi ex animi perferendis beatae numquam voluptas fuga deserunt facilis eligendi, explicabo repudiandae dignissimos exercitationem. Nobis consequuntur voluptatum dicta voluptatibus.
Similique quod asperiores nisi illo debitis nostrum accusamus, perferendis optio porro ipsam rem cumque amet vitae libero exercitationem earum eum iure dignissimos doloremque nihil aliquam? Praesentium perferendis asperiores esse distinctio.
Nihil aperiam neque itaque accusantium quam repudiandae, adipisci enim quasi veritatis praesentium amet mollitia culpa aliquid eos numquam, sunt at odio dolor, delectus eaque magnam harum nostrum quisquam! Commodi, enim!
Nihil neque deserunt tempore, molestias mollitia odit fugiat nostrum ullam possimus velit alias cupiditate, dolorem vitae explicabo laborum maiores eligendi sunt omnis corrupti tenetur voluptate voluptas rem at aperiam. Ea!
In perferendis mollitia fugit quam! Iusto dolore possimus quia delectus. Officiis nulla, debitis porro accusamus quod ad excepturi commodi ex aliquam cum nihil, illum molestias? Id aliquam fugiat rerum dolor.
Fuga, enim eius hic et porro rem, architecto reiciendis, voluptatibus neque beatae quam consequuntur temporibus ex error illo vel culpa recusandae est? Magnam et vitae ex hic laborum, pariatur deserunt!
Distinctio ad quos culpa aut in, incidunt obcaecati expedita itaque fugit nam nobis architecto nulla earum ab reprehenderit quod iure atque voluptatibus nemo deleniti esse fuga saepe nihil dicta? Recusandae.
A odit tenetur obcaecati, veritatis magnam tempore, accusamus provident laboriosam enim ipsa unde corporis quae eveniet cupiditate perspiciatis optio officiis deserunt doloremque animi architecto dolorem totam vero qui molestias! Reprehenderit.
</div>
<!-- <footer>
    @include('partials/footer')
</footer> -->
@endsection