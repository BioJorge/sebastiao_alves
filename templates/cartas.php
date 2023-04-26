<!--Cards-->
<div class="row mx-auto d-flex justify-content-evenly gap-5" id="sesao_cartas">
    <?php foreach($destaques as $d): ?> 
    <div class="card col-12 col-sm-3 p-0 rounded-0" style="width: 18rem;">
        <img src="<?=getLivroById($d["id_livro"])["imagem_cartas"]?>" class="card-img-top w-100 rounded-0" alt="...">
        <div class="card-body">
            <h5 class="card-title title1"><?=getLivroById($d["id_livro"])["titulo"]?></h5>
            <p class="title2"><?=getLivroById($d["id_livro"])["categoria"]?></p>
            <p class="card-text paragrafos">
            <?=getLivroById($d["id_livro"])["sinopse"]?>
            </p>
            <a href="livros.php?livro=<?=getLivroById($d["id_livro"])["id"]?>">
                <button class="botoes"></button>
            </a>
        </div>
    </div>
    <?php endforeach; ?>
</div>
