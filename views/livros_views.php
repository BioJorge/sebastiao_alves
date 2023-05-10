<?php

    if(isset($_GET["livro"])){
        $lista_livros = selectSQL("SELECT * FROM livros ORDER BY id ASC");
        foreach($lista_livros as $ll){
            if($ll["id"] == intval($_GET["livro"])){
                $livro_selecionado = $ll;
                break;
            }
        }
    } else{
        header("Location: index.php");
        exit();
    }

?>

<main class="container-fluid p-0" id="focus">
    <!--Apresentacao para livros-->
    <div class="col welcome p-0 m-0 col-12 col-lg-11">
        <h5 class="title2">Livros</h5>
        <h3 class="text-start title1"><?=$livro_selecionado["titulo"]?></h3>
    </div>

    <div class="col-12 mx-auto" id="livro">
        <div class="w-50 float-start" id="imagem_livro">
            <img src="<?=$livro_selecionado["imagem_livros"]?>" alt="" class="text-center">
        </div>
        
        <p class="paragrafos col-12">
            <?=$livro_selecionado["descricao"]?>
        </p>

        <div class="col-12 d-flex flex-column align-items-center align-items-xl-end">
            <button id="voltar_atras" onclick="history.back()"></button>
        </div>

        
    </div>
</main>
