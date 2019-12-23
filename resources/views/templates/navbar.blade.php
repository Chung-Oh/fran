<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand glow glow-lg" href="#">FranBeauty</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                @if ($_SERVER['REQUEST_URI'] == '/')
                    <a class="nav-item nav-link" href="#home">Home<div class="page"></div></a>
                    <a class="nav-item nav-link" href="#services">Serviços<div class="page"></div></a>
                    <a class="nav-item nav-link" href="#about">Quem sou<div class="page"></div></a>
                    <a class="nav-item nav-link" href="#jobs">Portfólio<div class="page"></div></a>
                    <a class="nav-item nav-link" href="#contact">Contato<div class="page"></div></a>
                @elseif ($_SERVER['REQUEST_URI'] == '/services' || $_SERVER['REQUEST_URI'] == '/about' || $_SERVER['REQUEST_URI'] == '/jobs')
                    <a class="nav-item nav-link" href="/">Home<div class="page"></div></a>
                    <a class="nav-item nav-link" href="/services">Serviços<div class="page"></div></a>
                    <a class="nav-item nav-link" href="/about">Quem sou<div class="page"></div></a>
                    <a class="nav-item nav-link" href="/jobs">Portfólio<div class="page"></div></a>
                @endif
            </div>
        </div>
    </nav>
</header>