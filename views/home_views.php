<main class="container-fluid p-0">
            <!--Apresentacao do Sebastiao-->
            <div class="col-lg-11 col-12 welcome p-0 d-flex flex-wrap ">
                <div class="caixa-imagem p-0 col-12 col-lg-5">
                    <img class="" id="sebastiao" src="imagens_para_site/desktop/FOTO-editada.jpg" alt="">
                </div>
                <div id="sobre_sebastiao" class="p-0 col-12 col-lg-7 d-flex flex-column align-self-start">
                    <h3 class="text-start title1"><?=$home["caixa_titulo"]?></h3>
                    <p class="text-start paragrafos">
                        <?=$home["caixa_paragrafo"]?>
                    </p>
                    <a class="botoes"></a>
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