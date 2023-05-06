
<!--Carousel sm-->
    <!-- foi usado dois caroseis diferentes, logo, foi necesário dois ids diferentes -->
<div id="carouselExampleCaptions2" class="carousel_pequeno carousel slide d-block d-sm-none col-12" data-bs-ride="carousel">

    <div class="carousel-indicators carousel-indicators-sm col-10 d-flex flex-start">
        <?php foreach($lista_carousel as $chave => $l): ?>
            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="<?=$chave?>"  class="<?= ($chave == 0) ? "active" : ""?>" aria-current="<?= ($chave == 0) ? "true" : "" ?>" aria-label="Slide <?=($chave+1)?>">
            </button>
        <?php endforeach; ?>
    </div>
    
    <div class="carousel-inner">
        <?php foreach($lista_carousel as $chave => $l): ?>
            <div class=" align-items-center carousel-item <?=($chave == 0) ? "active" : "";?>">
                <img src="<?=$l["imagem_sm"]?>" class="d-block w-100 carousel_pequeno_img" alt="...">
                <div class="carousel-caption carousel-pequeno-legenda col-10">
                    <p class="banner"><?=$l["categoria"]?></p>
                    <h5 class="banner-titulo"><?=$l["titulo"]?></h5>
                    <p class="banner-texto"><?=$l["sinopse"]?></p>
                    <a href="<?=$l["link"]?>" class="p-0 botoes"></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

