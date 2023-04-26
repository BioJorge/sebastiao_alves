<!--Navbar pequena-->

<nav class="navbar_pequena navbar p-0 m-0" id="navbar_pequena">
    <ul class="navbar-nav me-auto">
        <li class="nav-item active">
            <a class="nav-link menus <?=($actual_link == $url_home || $actual_link == $url_index) ? "active" : ""?>" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link menus <?=($actual_link == $url_autor) ? "active" : ""?>" href="autor.php">Autor</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link menus <?= (strpos("$actual_link", "$url_livros") !== false) ? "active" : "" ?>" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Livros
            </a>
            <ul class="dropdown-menu mt-4">
                <?php foreach($lista_livros as $l): ?>
                    <li><a class="dropdown-item .submenu p-0" href="livros.php?livro=<?=$l["id"]?>"><?=$l["titulo"]?></a></li>
                <?php endforeach; ?>
            </ul>
        </li>
        <li class="nav-item menus">
            <a class="nav-link <?=($actual_link == $url_imprensa) ? "active" : ""?>" href="imprensa.php">Imprensa</a>
        </li>
        <li class="nav-item ultimo_link menus">
            <a class="nav-link <?=($actual_link == $url_contactos) ? "active" : ""?>" href="contactos.php">Contactos</a>
        </li>
    </ul>
</nav>

