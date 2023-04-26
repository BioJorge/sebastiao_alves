<?php
    $url = "http://localhost/codemaster/trabalho_final_sebastiao_alves/";
?>

<footer class="container-fluid">
    <div class="row rodape mx-auto">
        <!--Navbar do footer-->
        <nav class="footer-nav d-none d-md-flex justify-content-center">
            <?php foreach($navegacao_footer as $f):?>

                <?php $nome = $f["nome"];?>

                <a class="nav-link" href="<?=$f["link"]?>">
                    <?= ($f["id"] == 3) ? "Livros" : "$nome"; ?> 
                </a>
            <?php endforeach; ?>
        </nav>
    </div>

    <div class="footer-end d-flex justify-content-center flex-wrap">
                <div class="col-12 col-md-6">
                    <div class="col-12 title1 text-center text-md-start">Contactos</div>
                    <div class="col-12 d-flex" id="info_contacto">
                        <div class="col-12 col-md-5">
                            <h3 class="subtitulo">Morada</h3>
                            <p>
                                <?=$contactos["morada"]?>
                            </p>
                        </div>
                        <div class="col-12 col-md-3 margem-10">
                            <h3 class="subtitulo">Telefone</h3>
                            <p>
                                <?=$contactos["telemovel"]?>
                            </p>
                        </div>
                        <div class="col-12 col-md-3 margem-15">
                            <h3 class="subtitulo">Email</h3>
                            <p id="ultimo_contacto">
                                <?=$contactos["email"]?>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 d-none d-md-block" id="seguranca_consumidor">
                        <img id="livro_reclamacoes" src="imagens_para_site/desktop/livroreclamacoes.svg" alt="livroreclamacao">
                        <img id="ralc" src="imagens_para_site/desktop/ralc.svg" alt="ralc">
                    </div>
                </div>
                <div class="col-12 col-md-5 d-flex flex-column align-items-center">
                    <div class="col-12 text-center">
                        <div class="title1">Siga-me nas redes sociais</div>
                    </div>

                    <div class="col-12 redes-sociais d-flex justify-content-center">
                        <button id="instagram"></button>
                        <button id="facebook"></button>
                        <button id="linkedin"></button>
                    </div>

                    <div class="col-12 d-flex d-md-none justify-content-center" id="seguranca_consumidor">
                        <img id="livro_reclamacoes" src="imagens_para_site/desktop/livroreclamacoes.svg" alt="livroreclamacao">
                        <img id="ralc" src="imagens_para_site/desktop/ralc.svg" alt="ralc">
                    </div>
                
                    <div class="col-12 text-center copyright">
                        <p class="text-center m-0 p-0">
                            Política de cookies.
                            <br>
                            Copyright&copy; 2023. Jorge Filho.  Todos os direitos reservados.
                        </p>
                    </div>
                </div>


</footer>