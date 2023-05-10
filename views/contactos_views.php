<?php
    $contactos = selectSQLUnico("SELECT * FROM contactos ORDER BY id ASC");
?>

<main class="container-fluid p-0" id="focus">
    <!--Apresentacao para contactos-->
    <div class="col welcome p-0 m-0 col-12 col-lg-11">
        <h5 class="title2">Contactos</h5>
        <h3 class="text-start title1">Podem contactar-me atraves do e-mail ou telefone</h3>
    </div>

    <div class="mx-auto col-12 d-flex justify-content-center flex-wrap contactos">
        <div class="contato col-12 col-md-2 d-flex flex-column align-items-center justify-content-center">
            <h3 class="subtitulo text-center">Telefone</h3>
            <p class="text-center paragrafos">
                <?=$contactos["telemovel"]?>
            </p>
        </div>
        <div class="contato  col-12 col-md-4 d-flex flex-column align-items-center justify-content-center">
            <h3 class="subtitulo text-center">Morada</h3>
            <p class="text-center paragrafos">
                <?=$contactos["morada"]?>
            </p>
        </div>
        <div class="contato  col-12 col-md-2 d-flex flex-column align-items-center justify-content-center">
            <h3 class="subtitulo text-center">Email</h3>
            <p class="text-center paragrafos">
                <?=$contactos["email"]?>
            </p>
        </div>
    </div>

    <hr id="linha_separadora">

    <div class="col-12 d-flex justify-content-center horario">
        <div class="col-4">
            <h3 class="subtitulo text-center">Horário</h3>
            <p class="text-center paragrafos">
                <?=$contactos["horario"]?>
            </p>
        </div>
    </div>
            
</main>