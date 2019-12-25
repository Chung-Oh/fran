@extends('layout')

@section('title', 'FranBeauty - Sobre')

@section('content')

    <section>
        <div id="aboutImgPage" class="parallax">
            <h1 class="title-jumbo-secondary">Sobre mim</h1>
        </div>
    </section>
    <section>
        <div id="aboutImgPage2" class="parallax"></div>
        <div class="container row mx-auto py-3">
            <p class="content align-self-center col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 my-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
            <p class="content align-self-center col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 my-3 mx-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </section>

    @include('home.contact')

@endsection