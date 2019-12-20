<?php require_once 'view/templates/header.php' ?>
<?php require_once 'view/templates/navbar.php' ?>

<main>
    <section id="home"> <!-- Jumbotron -->
        <div id="home-img" class="parallax"></div>
        <h1 class="title-jumbo">Francielly Rodrigues</h1>
        <h5 class="subtitle-jumbo">Maquiadora Profissional</h5>
    </section>

    <section> <!-- Service -->
        <div id="service-img" class="parallax"></div>
        <h2 id="service" class="name-section text-center py-3">Serviços <span class="dot">.</span></h2>
        <div class="container row mx-auto py-3 text-center">
            <div class="py-3 col-xl-4 col-lg-4 col-md-4">
                <h6 class="h4 pt-2">Casamento</h6>
                <div class="line"></div>
                <p class="content font-italic pb-2">Colocar aqui sobre serviços para casamentos.</p>
            </div>
            <div class="py-3 col-xl-4 col-lg-4 col-md-4">
                <h6 class="h4 pt-2">Debutante</h6>
                <div class="line"></div>
                <p class="content font-italic pb-2">Colocar aqui sobre serviços para debutante.</p>
            </div>
            <div class="py-3 col-xl-4 col-lg-4 col-md-4">
                <h6 class="h4 pt-2">Festas</h6>
                <div class="line"></div>
                <p class="content font-italic pb-2">Colocar aqui sobre serviços para festas.</p>
            </div>
        </div>
        <div class="container text-center py-5 mb-5">
            <a class="schedule" href="#">Agende já.</a>
        </div>
    </section>
    
    <section> <!-- About -->
        <div id="about-img" class="parallax"></div>
        <h2 id="about" class="name-section text-center py-3">Quem sou <span class="dot">.</span></h2>
        <div class="container row mx-auto">
            <div class="align-self-center col col-xl-6 my-3">
                <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p class="content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <img class="img-fluid my-3 col-xl-6" src="img/professional/francielly-rodrigues-6.jpeg" alt="titulo sobre imagem">
        </div>
    </section>

    <section id="jobs-img"> <!-- Jobs -->
        <div class="container">
            <h2 id="jobs" class="name-section text-center py-3">Portfólio <span class="dot">.</span></h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <img class="img-fluid" src="img/material/sobrancelha.jpg" alt="titulo sobre imagem">
        </div>
    </section>

    <section id="contact-img"> <!-- Contact -->
        <div class="container">
            <h2 id="contact" class="name-section text-center py-3">Contato <span class="dot">.</span></h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </section>
</main>

<?php require_once 'view/templates/footer.php' ?>