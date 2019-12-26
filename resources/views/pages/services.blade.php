@extends('layout')

@section('title', 'FranBeauty - Serviços')

@section('content')

    <section>
        <div id="servicesImgPage" class="parallax">
            <h1 class="title-jumbo-secondary">Meus Serviços</h1>
        </div>
    </section>
    <section>
        <div id="servicesImgPage2" class="parallax"></div>
        <div class="container row mx-auto pt-3">
            <p class="content col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12 my-3 mx-auto">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="row mx-auto px-3 pb-3">
            <!-- Casamento -->
            <div class="container text-center col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 py-3">
                <img class="img-thumbnail" src="img/jobs/make-e-hair-noiva.jpg" alt="Maquiagem e penteado para noiva." style="height: 250px;width: 250px;border-radius: 50%;border: 2px solid pink;">
                <p class="h4 text-center pt-2">Casamento</p>
                <div class="line"></div>
                <p class="content font-italic mx-3">Falar sobre serviço de casamento. Falar sobre serviço de casamento. Falar sobre serviço de casamento.</p>
            </div>
            <!-- Debutante -->
            <div class="container text-center col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 py-3">
                <img class="img-thumbnail" src="img/material/debutante.jpg" alt="Maquiagem e penteado para debutante." style="height: 250px;width: 250px;border-radius: 50%;border: 2px solid pink;">
                <p class="h4 text-center pt-2">Debutante</p>
                <div class="line"></div>
                <p class="content font-italic mx-3">Falar sobre serviço de debutante. Falar sobre serviço de debutante. Falar sobre serviço de debutante.</p>
            </div>
            <!-- Eventos em geral -->
            <div class="container text-center col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 py-3">
                <img class="img-thumbnail" src="img/material/eventos-geral.jpg" alt="Maquiagem e penteado para eventos em geral." style="height: 250px;width: 250px;border-radius: 50%;border: 2px solid pink;">
                <p class="h4 text-center pt-2">Eventos em geral</p>
                <div class="line"></div>
                <p class="content font-italic mx-3">Falar sobre serviço de eventos em geral. Falar sobre serviço de eventos em geral. Falar sobre serviço de eventos em geral.</p>
            </div>
            <!-- Make balada -->
            <div class="container text-center col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 py-3">
                <img class="img-thumbnail" src="img/material/make-balada.jpg" alt="Maquiagem e penteado para balada." style="height: 250px;width: 250px;border-radius: 50%;border: 2px solid pink;">
                <p class="h4 text-center pt-2">Make balada</p>
                <div class="line"></div>
                <p class="content font-italic mx-3">Falar sobre serviço de make balada. Falar sobre serviço de make balada. Falar sobre serviço de make balada.</p>
            </div>
            <!-- Make social -->
            <div class="container text-center col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 py-3">
                <img class="img-thumbnail" src="img/material/make-social.jpg" alt="Maquiagem e penteado social." style="height: 250px;width: 250px;border-radius: 50%;border: 2px solid pink;">
                <p class="h4 text-center pt-2">Make social</p>
                <div class="line"></div>
                <p class="content font-italic mx-3">Falar sobre serviço de make social. Falar sobre serviço de make social. Falar sobre serviço de make social.</p>
            </div>
            <!-- Make ensaio fotográfico -->
            <div class="container text-center col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 py-3">
                <img class="img-thumbnail" src="img/material/make-ensaio-fotografico.jpg" alt="Maquiagem e penteado para ensaio fotográfico." style="height: 250px;width: 250px;border-radius: 50%;border: 2px solid pink;">
                <p class="h4 text-center pt-2">Make ensaio fotográfico</p>
                <div class="line"></div>
                <p class="content font-italic mx-3">Falar sobre serviço de make ensaio fotográfico. Falar sobre serviço de make ensaio fotográfico. Falar sobre serviço de make ensaio fotográfico.</p>
            </div>
            <!-- Cursos de auto maquiagem -->
            <div class="container text-center col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 py-3">
                <img class="img-thumbnail" src="img/material/curso-auto-maquiagem-1.jpg" alt="Maquiagem e penteado para ensaio fotográfico." style="height: 250px;width: 250px;border-radius: 50%;border: 2px solid pink;">
                <p class="h4 text-center pt-2">Cursos de auto maquiagem</p>
                <div class="line"></div>
                <p class="content font-italic mx-3">Falar sobre serviço de Cursos de auto maquiagem. Falar sobre serviço de Cursos de auto maquiagem. Falar sobre serviço de Cursos de auto maquiagem.</p>
            </div>
        </div>
    </section>

    @include('home.contact')

@endsection