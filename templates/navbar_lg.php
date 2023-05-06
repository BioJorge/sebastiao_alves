
<!--Navbar grande-->
<div class="divisor col-12 d-flex justify-content-center">
    <nav class="d-none d-md-block navbar navbar-expand bg-body-tertiary p-0 m-0 transparent">
        <div class="container-fluid p-0 m-0">
            <div class="collapse navbar-collapse p-0 m-0" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link <?=($actual_link == $url_home || $actual_link == $url_index) ? "active" : ""?>" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=($actual_link == $url_autor) ? "active" : ""?>" href="autor.php">Autor</a>
                    </li>
                    <li class="nav-item dropdown">
                                                <!-- strpos retorna a posicao onde está dentro da string grande a substring que pediste.
                                                nesse caso, estou pedindo para ver se existe 'https://'. $_SERVER['HTTP_HOST'] . "/sebastiao_alves/livros.php" na url atual
                                                IPC: tem que ser !== false, porque a posição pode ser 0, o que seria interpretado como falso tbm, e vai dar bug
                                            -->
                        <a class="nav-link <?= (strpos("$actual_link", "$url_livros") !== false) ? "active" : "" ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Livros
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach($lista_livros as $l): ?>
                                <li><a class="dropdown-item" href="livros.php?livro=<?=$l["id"]?>"><?=$l["titulo"]?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=($actual_link == $url_imprensa) ? "active" : ""?>" href="imprensa.php">Imprensa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=($actual_link == $url_contactos) ? "active" : ""?>" href="contactos.php">Contactos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>