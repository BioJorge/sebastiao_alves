<?php
    $home = selectSQLUnico("SELECT * FROM home ORDER BY id ASC");
    $lista_livros = selectSQL("SELECT * FROM livros ORDER BY id ASC");
    $destaques = selectSQL("SELECT * FROM destaques ORDER BY id ASC");
    $autor = selectSQLUnico("SELECT sobre_autor FROM autor ORDER BY id ASC");
?>

<main class="container-fluid p-0">
            <!--Apresentacao do Sebastiao-->
            <div class="col-lg-11 col-12 welcome p-0 d-flex flex-wrap ">
                <div class="caixa-imagem p-0 col-12 col-lg-5">
                    <img class="" id="sebastiao" src="<?=$home["imagem"]?>" alt="">
                </div>
                <div id="sobre_sebastiao" class="p-0 col-12 col-lg-7 d-flex flex-column align-self-start">
                    <h3 class="text-start title1">BEM-VINDO AO MEU SITE</h3>
                    <p class="text-start paragrafos">
                        <?=limit_text(strip_tags($autor["sobre_autor"]), 120)?>
                    </p>
                    <a href="autor.php" class="botoes"></a>
                </div>
            </div>
            
            <!--Sobre os ultimos livros-->
            <div class="col colecao_livros">
                <div class="col-12">
                    <h3 class="title1">últimos livros</h3>
                    <p class="paragrafos" id="sobre_livros">
                        <?=$home["ultimos_livros_paragrafo"]?>
                    </p>
                </div>
  
            </div>
    
    <!--Cartas-->
    <?php require_once("templates/cartas.php")?>
          
</main>