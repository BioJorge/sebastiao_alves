
 <!--Carousel lg-->
<div id="carouselExampleCaptions" class="carousel slide d-none d-sm-block col-12" data-bs-ride="carousel">
    <div class="carousel-indicators col-6 col-sm-5 col-md-4 d-flex flex-start">
        <?php foreach($lista_carousel as $chave => $l): ?>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?=$chave?>"  class="<?= ($chave == 0) ? "active" : ""?>" aria-current="<?= ($chave == 0) ? "true" : "" ?>" aria-label="Slide <?=($chave+1)?>">
            </button>
        <?php endforeach; ?>
    </div>
    <div class="carousel-inner">
        <?php foreach($lista_carousel as $chave => $l): ?>
            <div class="carousel-item <?= ($chave == 0) ? "active" : ""; ?>">
                <img src="<?=$l["imagem_lg"]?>" class="d-block w-100" alt="...">
                <div class="carousel-caption carousel-legenda d-none d-md-block col-5">
                    <p class="banner"><?=$l["categoria"]?></p>
                    <h5 class="banner-titulo"><?=$l["titulo"]?></h5>
                    <p class="banner-texto"><?=$l["sinopse"]?></p>
                    <a href="<?=$l["link"]?>" class="p-0 botoes"></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>