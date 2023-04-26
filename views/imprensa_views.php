<?php
                            //count vai retornar um array com apernas uma chave, nesse caso chamada total, que é o valro da busca
    //tem que ser SQLUnico pr n precisar botar[0][total]
    $num_elementos = selectSQLUnico("SELECT Count(*) AS total FROM imprensa");
    $num_elementos = $num_elementos["total"]; //agora essa variavel fo atualizada para dar apenas um int, ao inves de um array com uma chave chamada total com um valor int
    $elementos_por_pagina = 2; //delimitando quantas noticais por pagina

    //ceil arredonda pra cima, floor arredonda pra baixo
    $num_paginas = ceil($num_elementos/$elementos_por_pagina);


        
    //se n tiver pagina atual passada via GET, por default vai pra 1
    $pagina_atual = (isset($_GET["pagina"])) ? intval($_GET["pagina"]) : 1;


    $total_a_saltar = ($pagina_atual-1)*$elementos_por_pagina;

    //limit limita o numero de "puxadas do servidor"
                            //OFFSET é para ignorar/saltar n numeros
    $imprensas = selectSQL("SELECT * FROM imprensa LIMIT $elementos_por_pagina OFFSET $total_a_saltar");

?>  


<main class="container-fluid p-0 m-0">
    <!--Apresentacao para imprensa-->
    <div class="col welcome p-0 m-0 col-12 col-md-11">
        <h5 class="title2">impresa</h5>
        <h3 class="text-start title1">últimas notícias</h3>
    </div>

    <div class="livro lancamento">
        <div class="caixa-livro p-0">
            <h3 class="title1 titulo_imprensa"><?=$imprensas[0]["titulo"]?></h3>
            <p class="paragrafo_imprensa"><?=$imprensas[0]["data_publicacao"]?></p>
            <div><img class="w-100 mb-5" src="<?=$imprensas[0]["imagem"]?>" alt=""></div>    
        </div>

        <p class="paragrafos mt-5">
            <?=$imprensas[0]["descricao"]?>
        </p>
        
    </div>

    <div class="livro livro-2">
        <div class="caixa-livro">
            <h3 class="title1 titulo_imprensa"><?=$imprensas[1]["titulo"]?></h3>
            <p class="paragrafo_imprensa"><?=$imprensas[1]["data_publicacao"]?></p>
            <div>
                <img class="w-100" src="<?=$imprensas[1]["imagem"]?>" alt="">
            </div>
            
            <p class="paragrafos mt-5">
                <?=$imprensas[1]["descricao"]?>
            </p>
        </div>
    </div>

    <div class="paginacao mx-auto">
        <nav aria-label="Page navigation example">
            <form action="" class="pagination d-flex justify-content-center">
                <button class="setas" id="seta_esquerda" name="pagina" value="<?= ($pagina_atual > 1) ? ($pagina_atual-1) : 1 ?>"></button>

                <button class="page-link" name="pagina" value="<?=1?>">...</button>

                
                <?php for($i = 1; $i <= $num_paginas; $i++):?>
                <button class="page-link" name="pagina" value="<?=$i?>" style="<?=($i == $pagina_atual) ? "color:#B17E3B;" : "" ?>"><?=$i?></button>
                <?php endfor;?>

                <button class="page-link ultimo" name="pagina" value="<?=$num_paginas?>">...</button>

                <button class="setas" id="seta_direita" name="pagina" value="<?= ($pagina_atual < $num_paginas) ? ($pagina_atual+1) : $num_paginas ?> "></button>
            </form>
        </nav>
    </div>

</main>