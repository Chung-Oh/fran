@extends('layout')

@section('title', 'FranBeauty - Sobre')

@section('content')

    <section>
        <div id="aboutImgPage" class="parallax">
            <h1 class="title-jumbo-secondary">Sobre Mim</h1>
        </div>
    </section>
    <section>
        <div id="aboutImgPage2" class="parallax"></div>
        <div class="container row mx-auto py-3">
            <p class="content align-self-center col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 my-3">Com 31 anos, mãe de 3 filhos, formada inicialmente pelo SENAC de São Paulo, seguindo de workshops com experts como Vanessa Rozan entre outros, atualmente representando uma das maiores marcas de maquiagem no Brasil. Venho ao longo de mais de 8 anos, me especializando em diversas formas dentro do mundo da beleza não só na maquiagem, mas também em: design de sobrancelhas, microblanding , penteados e cursos.</p>
            <figure class="align-self-center col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 my-3">
                <img id="aboutMe1" class="img-fluid" src="../img/professional/francielly-rodrigues-11.jpg" alt="Francielly no evento Sumirê Fashion Show.">
                <figcaption class="font-italic text-center small">Evento Sumirê Fashion Show.</figcaption>
            </figure>
        </div>
    </section>
    <section>
        <div id="aboutImgPage3" class="parallax"></div>
        <div class="container row mx-auto py-3">
            <figure class="text-center col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 my-3">
                <img id="aboutMe2" class="img-fluid" src="../img/professional/francielly-rodrigues-12.jpg" alt="Francielly no evento Beauty Fair.">
                <figcaption class="font-italic small">Evento Beauty Fair.</figcaption>
            </figure>
            <p class="content align-self-center col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 my-3 mx-auto">Beauty Fair é uma das  maiores feiras da beleza na América Latina, lá sempre acompanho lançamentos de produtos e tendências do mundo da beleza. Trabalho nesse super evento a três anos e sempre sou surpreendida, como a tecnologia e a modernidade vem nos ajudando, também nesse mundo incrível da beleza.</p>
        </div>
    </section>

    @include('home.contact')

@endsection