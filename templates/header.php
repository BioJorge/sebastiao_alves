

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