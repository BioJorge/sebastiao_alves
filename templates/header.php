<?php

    $url_index = 'https://'. $_SERVER['HTTP_HOST'] . "/sebastiao_alves/";
    $url_home = 'https://'. $_SERVER['HTTP_HOST'] . "/sebastiao_alves/index.php";
    $url_autor = 'https://'. $_SERVER['HTTP_HOST'] . "/sebastiao_alves/autor.php";
    $url_contactos = 'https://'. $_SERVER['HTTP_HOST'] . "/sebastiao_alves/contactos.php";
    $url_imprensa = 'https://'. $_SERVER['HTTP_HOST'] . "/sebastiao_alves/imprensa.php";
    $url_livros = 'https://'. $_SERVER['HTTP_HOST'] . "/sebastiao_alves/livros.php";

    $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
    $lista_livros = selectSQL("SELECT * FROM livros ORDER BY id ASC");
    $lista_carousel = selectSQL("SELECT * FROM carousel ORDER BY id ASC");
 ?>

<header class="container-fluid p-0 d-flex justify-content-center">
    <!--Carousel lg-->
    
    <?php require_once("templates/carousel_lg.php");?>

    <!--Carousel sm-->
    <?php require_once("templates/carousel_sm.php");?>

    
    <!--Navegação-->
    <div class="navegacao row d-flex justify-content-center">
        <!--Titulo-->
        <div id="titulo_nav" class="titulo d-flex p-0">
            <h1 class="text-start m-0">Sebastião Alves</h1>
            <!--Botao da Navbar pequena-->
            <button class="mobile-nav-toggle d-block d-md-none align-self-start" type="button" onclick="mostrarMenu(this, 'navbar_pequena')">
                <span></span>
            </button>
        </div>
        <!--Navbar pequena-->
        <?php require_once("templates/navbar_sm.php");?>

        
        <!--Navbar grande-->
        <?php require_once("templates/navbar_lg.php");?>
    </div>

</header>