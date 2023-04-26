<?php
    $autor = selectSQLUnico("SELECT * FROM autor ORDER BY id ASC");
    $contactos = selectSQLUnico("SELECT * FROM contactos ORDER BY id ASC");
    $home = selectSQLUnico("SELECT * FROM home ORDER BY id ASC");
    $lista_carousel = selectSQL("SELECT * FROM carousel_lg ORDER BY id ASC");
    $navegacao_footer = selectSQL("SELECT * FROM navegacao_footer ORDER BY id ASC");
    $navegacao_header = selectSQL("SELECT * FROM navegacao_header ORDER BY id ASC");
    $lista_livros = selectSQL("SELECT * FROM livros ORDER BY id ASC");
    $imprensa = selectSQL("SELECT * FROM imprensa ORDER BY id ASC");
    $redes_sociais = selectSQLUnico("SELECT * FROM redes_sociais ORDER BY id ASC");
    $lista_acessos = selectSQL("SELECT * FROM acessos ORDER BY id DESC");
    $destaques = selectSQL("SELECT * FROM destaques ORDER BY id ASC");
    
    $url_atual = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $caminho_url_ate_pagina = str_replace("index.php", "", $url_atual);

    //($url_atual == $caminho_url_ate_pagina + "index.php") ? "active" : ""
?>