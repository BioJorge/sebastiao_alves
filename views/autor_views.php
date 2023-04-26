<main class="container-fluid p-0">
    <!--Apresentacao do autor-->
    <div class="welcome p-0 m-0 col-lg-11 col-12">
        <h5 class="title2">Autor</h5>
        <h3 class="text-start title1">sobre mim</h3>
    </div>

    <div class="mx-auto col-11 autor d-flex flex-column justify-content-center align-items-center">
        <img class="text-center" id="sebastiao" src="<?=$autor["imagem"]?>" alt="">
        
        <p class="paragrafos text-start">
            <?=$autor["sobre_autor"]?>
        </p>
        <button class="p-0" id="ver_mais"></button>
        <button class="align-self-start" id="voltar_atras"></button>
    </div>
    
</main>