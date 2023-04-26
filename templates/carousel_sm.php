

<!--Carousel sm-->
<div id="carouselExampleCaptions" class="carousel_pequeno carousel slide d-block d-sm-none" data-bs-ride="carousel">
    <div class="carousel-indicators carousel-indicators-sm col-10 d-flex justify-content-start p-0">
        <?php foreach($lista_carousel as $chave => $l): ?>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?=$chave?>" <?= ($chave == 0) ? 'class="active" aria-current="true" aria-label="Slide 1"' : 'aria-label="Slide   ($chave+1)"'?>>
            </button>
        <?php endforeach; ?>
    </div>
    <div class="carousel-inner d-flex">
        <?php foreach($lista_carousel as $chave => $l): ?>
            <div class="carousel-item <?= ($chave == 0) ? "active" : ""; ?> d-flex justify-content-center align-items-center">
                <img class="carousel_pequeno_img" src="<?= $l["imagem_sm"]?>" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel-pequeno-legenda col-10">
                    <p class="banner"><?= $l["categoria"]?></p>
                    <h5 class="banner-titulo"><?= $l["titulo"]?></h5>
                    <p class="banner-texto"><?= $l["sinopse"]?></p>
                    <button class="p-0 botoes"></button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
