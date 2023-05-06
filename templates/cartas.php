<?php
    $lista_livros = selectSQL("SELECT * FROM livros ORDER BY id ASC");
?>


<!--Cards-->
<div class="row mx-auto d-flex justify-content-evenly gap-5" id="sesao_cartas">
    <?php foreach($destaques as $d): ?> 
    <div class="card col-12 col-sm-3 p-0 rounded-0" style="width: 18rem;">
        <img src="<?=getLivroById($d["id_livro"])["imagem_cartas"]?>" class="card-img-top rounded-0" alt="...">
        <div class="card-body">
            <h5 class="card-title title1"><?=getLivroById($d["id_livro"])["titulo"]?></h5>
            <p class="title2"><?=getLivroById($d["id_livro"])["categoria"]?></p>
            <p class="card-text paragrafos">
                <!-- do texto do livro pego do sql, tirar possiveis strip com strip_tags
                em seguida, usar uma funcao customizada para limitar o texto para 30 palavras -->
                <?=limit_text(strip_tags(getLivroById($d["id_livro"])["descricao"]), 30)?>
            </p>
            <a href="livros.php?livro=<?=getLivroById($d["id_livro"])["id"]?>" class="p-0 botoes"></a>
        </div>
    </div>
    <?php endforeach; ?>
</div>
