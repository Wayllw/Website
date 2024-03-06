<?php
include('verificar.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Trips Portugal - Lugares para Viajar</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/64dc9c3e27.js" crossorigin="anonymous"></script>
</head>

<body>
<header>
    <nav>
        <ul>
            <li><a href="pesquisa.php" class="button">Viajar</a></li>
            <li><a href="reservas.php" class="button">Reservas</a></li>
            <li><a href="logout.php" class="button">Sair</a></li>
        </ul>
    </nav>
</header>
<div class="div_main_container">
    <div class="banner">
        <h1 style="color: #000000;">Bem-vindo à Trips Portugal</h1>
        <p style="color: #000000;">Descubra os melhores lugares para viajar!</p>
    </div>

    <section class="search-bar">
        <input type="text" placeholder="Pesquisar destinos...">
        <a href="pesquisa.php" class="button">Pesquisar</a>
    </section>

    <section class="continent-grid">
        <!-- Conteúdo da grade de continentes aqui -->
    </section>

    <section class="vertical-carousel">
        <div class="carousel-container">
            <div class="carousel-slide">
                <img src="css\imgs\TORRE.jpg" alt="Imagem 1">
            </div>
            <div class="carousel-slide">
                <img src="css\imgs\60cb127430b054e6c699838503b30b92b14cac3d.jpg" alt="Imagem 2">
            </div>
            <div class="carousel-slide">
                <img src="css\imgs\15.-3-destinos-turisticos-inteligentes-en-Espana-valencia.jpg" alt="Imagem 3">
            </div>
            <div class="carousel-slide">
                <img src="css\imgs\6a6079108136ab5419748b8427948c83e1ddba82.jpg" alt="Imagem 4">
            </div>
        </div>
        <button class="carousel-button prev">Anterior</button>
        <button class="carousel-button next">Próximo</button>
    </section>

    <section class="travel-plans-grid">
        <div class="travel-plan">
            <img src="css\imgs\passagens-aereas-roma-capa2019-01-820x430.png" alt="Plano de Viagem 1">
            <h3>Destino Exótico</h3>
            <p>Uma aventura inesquecível aguarda por você. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="travel-plan">
            <img src="css\imgs\Dark_Hedges.jpg" alt="Plano de Viagem 2">
            <h3>Praia Paradisíaca</h3>
            <p>Relaxe e aproveite o sol e o mar cristalino. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="travel-plan">
            <img src="css\imgs\Galway-Irlanda.jpg" alt="Plano de Viagem 3">
            <h3>Montanhas Magníficas</h3>
            <p>Explore as paisagens montanhosas. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="travel-plan">
            <img src="css\imgs\Radisson-Blu-Resort-Maldives-Opens.png" alt="Plano de Viagem 4">
            <h3>Cidade Histórica</h3>
            <p>Descubra a história em cada esquina. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </section>
    <script src="javascript\script.js"></script>
</div>
</body>
</html>
